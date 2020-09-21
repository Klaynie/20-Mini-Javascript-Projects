const rulesBtn = document.getElementById('rules-btn');
const rules = document.getElementById('rules');
const closeBtn = document.getElementById('close-btn');
const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

let score = 0;
let startOfGame = true;
let globalSpeed = 0;

const brickRowCount = 9;
const brickColumnCount = 5;

// Create ball props
let ball = {
  x: Math.random() * (canvas.width - 100),
  y: canvas.height / 2,
  size: 10,
  speed: globalSpeed,
  dx: globalSpeed,
  dy: -globalSpeed
};

// Create paddle props
let paddle = {
  x: canvas.width / 2 - 40,
  y: canvas.height - 20,
  w: 80,
  h: 10,
  speed: 2 * globalSpeed,
  dx: 0
};

// Create brick props
const brickInfo = {
  w: 70,
  h: 20,
  padding: 10,
  offsetX: 45,
  offsetY: 60,
  visible: true
};

// Create bricks
const bricks = [];
for (let i = 0; i < brickRowCount; i++) {
  bricks[i] = [];
  for (let j = 0; j < brickColumnCount; j++) {
    const x = i * (brickInfo.w + brickInfo.padding) + brickInfo.offsetX;
    const y = j * (brickInfo.h + brickInfo.padding) + brickInfo.offsetY;
    const color = getRowColor(j);
    bricks[i][j] = { x, y, color, ...brickInfo };
  }
}

// Define brick color based on Y-Axis position
function getRowColor(row) {
  switch (row) {
    case 0:
      color = "red";
      break;
    case 1:
      color = "orange";
      break;
    case 2:
      color = "green";
      break;
    case 3:
      color = "blue";
      break;
    case 4:
      color = "indigo";
      break;
  }

  return color;
}

function generateColorGradiant(block) {
  const grd = ctx.createLinearGradient(block.x - block.w, block.y + block.h, block.x - block.w, block.y - block.h);
  grd.addColorStop(0, "black");
  grd.addColorStop(0.1, block.color);
  grd.addColorStop(1, "black");

  return grd;
}

// Draw ball on canvas
function drawBall() {
  ctx.beginPath();
  ctx.arc(ball.x, ball.y, ball.size, 0, Math.PI * 2);
  const grd = ctx.createRadialGradient(ball.x, ball.y, 0, ball.x + ball.size, ball.y + ball.size, 2 * Math.PI * ball.size);
  grd.addColorStop(0, "white");
  grd.addColorStop(0.3, "black");
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.closePath();
}

// Draw paddle on canvas
function drawPaddle() {
  ctx.beginPath();
  ctx.rect(paddle.x, paddle.y, paddle.w, paddle.h);
  const grd = ctx.createLinearGradient(paddle.x - paddle.w, paddle.y + paddle.h, paddle.x - paddle.w, paddle.y - paddle.h);
  grd.addColorStop(0, "black");
  grd.addColorStop(0.1, "#0095dd");
  grd.addColorStop(1, "black");
  ctx.fillStyle = grd;
  ctx.fill();
  ctx.closePath();
}

// Draw score on canvas
function drawScore() {
  ctx.font = '20px Arial';
  ctx.fillStyle = '#0095dd';
  ctx.fillText(`Score: ${score}`, canvas.width - 100, 30);
}

// Draw start message on canvas
function drawStart() {
  ctx.font = '40px Arial';
  ctx.fillStyle = '#000';
  ctx.textAlign = "center";
  ctx.fillText("Press Enter to begin", canvas.width / 2, 400);
}

// Draw bricks on canvas
function drawBricks() {
  bricks.forEach(column => {
    column.forEach(brick => {
      ctx.beginPath();
      ctx.rect(brick.x, brick.y, brick.w, brick.h);
      ctx.fillStyle = brick.visible ? generateColorGradiant(brick) : 'transparent';
      ctx.fill();
      ctx.closePath();
    })
  })
}

// Move paddle on canvas
function movePaddle() {
  paddle.x += paddle.dx;

  // Wall detection
  if (paddle.x + paddle.w > canvas.width) {
    paddle.x = canvas.width - paddle.w;
  }

  if (paddle.x < 0) {
    paddle.x = 0;
  }
}

// Move ball on canvas
function moveBall() {
  ball.x += ball.dx;
  ball.y += ball.dy;

  if (hitsWallX()) {
    ball.dx *= -1;
  }

  if (hitsWallY()) {
    ball.dy *= -1;
  }

  // Paddle collision
  if (hitsPaddle()) {
    ball.dy *= -1;
  }

  // Brick collision
  bricks.forEach(column => {
    column.forEach(brick => {
      if (brick.visible) {
        if (hitsBrick(brick)) {
          ball.dy *= -1;
          brick.visible = false;

          increaseScore();
        }
      }
    })
  })

  // Hit bottom wall - Lose
  if (ball.y + ball.size > canvas.height) {
    score = 0;
    showAllBricks();
  }
}

// Increase score
function increaseScore() {
  score++;

  if (score % (brickRowCount * brickColumnCount) === 0) {
    showAllBricks();
  }
}

// Make all bricks appear
function showAllBricks() {
  bricks.forEach(column => {
    column.forEach(brick => brick.visible = true);
  })
}

// Check for wall (left/right) collision
function hitsWallX() {
  if (
    ball.x + ball.size > canvas.width ||
    ball.x - ball.size < 0
  ) {
    return true;
  } else {
    return false;
  }
}

// Check for wall (top/bottom) collision
function hitsWallY() {
  if (
    ball.y + ball.size > canvas.height ||
    ball.y - ball.size < 0
  ) {
    return true;
  } else {
    return false;
  }
}

// Check for paddle collision
function hitsPaddle() {
  if (
    ball.x - ball.size > paddle.x &&
    ball.x + ball.size < paddle.x + paddle.w &&
    ball.y + ball.size > paddle.y
  ) {
    return true;
  } else {
    return false;
  }
}

// Check for brick collision
function hitsBrick(brick) {
  if (
    ball.x - ball.size > brick.x && // left brick side check
    ball.x + ball.size < brick.x + brick.w && // right brick side check
    ball.y + ball.size > brick.y && // top brick side check
    ball.y - ball.size < brick.y + brick.h // bottom brick side check
  ) {
    return true;
  } else {
    return false;
  }
}

// Draw all shapes
function draw() {
  // Clear canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  drawBall();
  drawPaddle();
  drawScore();
  if (startOfGame) {
    drawStart();
  }
  drawBricks();
}

// Update canvas drawing and animation
function update() {
  movePaddle();
  moveBall();

  draw();

  requestAnimationFrame(update);
}

update();

// Keydown event
function keyDown(e) {
  if (e.key === 'Right' || e.key === 'ArrowRight' || e.key === 'd') {
    paddle.dx = paddle.speed;
  } else if (e.key === 'Left' || e.key === 'ArrowLeft' || e.key === 'a') {
    paddle.dx = -paddle.speed;
  }
}

// Keyup event
function keyUp(e) {
  if (e.key === 'Right' || e.key === 'ArrowRight' || e.key === 'd' || e.key === 'Left' || e.key === 'ArrowLeft' || e.key === 'a') {
    paddle.dx = 0;
  }
}

// Keypress for starting game
function startGame(e) {
  if (e.key === "Enter") {
    startOfGame = false;
    globalSpeed = 4;
    ball.speed = globalSpeed;
    ball.dx = globalSpeed;
    ball.dy = -globalSpeed;
    paddle.speed = 2 * globalSpeed;
  }
}

// Keyboard event handlers
document.addEventListener('keydown', keyDown);
document.addEventListener('keyup', keyUp);
document.addEventListener('keypress', startGame);

// Rules and close event handlers
rulesBtn.addEventListener('click', () => { rules.classList.add('show'); });
closeBtn.addEventListener('click', () => { rules.classList.remove('show'); });