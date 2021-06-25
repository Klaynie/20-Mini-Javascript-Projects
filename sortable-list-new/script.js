const draggable_list = document.getElementById('draggable-list');
const check = document.getElementById('check');
const paragraph = document.getElementById('description');

// Init variables
let listValues;
var richestPeople = [];
const listItems = [];
let dragStartIndex;

// Get random word from database
function initializeDOM() {
  fetch('http://klaynie.rf.gd/sortable-list-new/call.php', {
      method: 'get',
    }).then((res) => res.json())
    .then(async(data) => {
      listValues = data;
      addDescriptionToDOM(listValues);
      richestPeople = listValues.slice(1, 11);
      createList(richestPeople);
    });
}

function addDescriptionToDOM(listValues) {
  const instructions = listValues[0];
  const description = `Drag and drop the "${instructions}" into their corresponding spots.`;
  paragraph.innerHTML = description;
}

// Insert list items into DOM
function createList(richestPeople) {
  [...richestPeople]
  .map(a => ({ value: a, sort: Math.random() }))
    .sort((a, b) => a.sort - b.sort)
    .map(a => a.value)
    .forEach((person, index) => {
      const listItem = document.createElement('li');

      listItem.setAttribute('data-index', index);

      listItem.innerHTML = `
        <span class="number">${index + 1}</span>
        <div class="draggable" draggable="true">
          <p class="person-name">${person}</p>
          <i class="fas fa-grip-lines"></i>
        </div>
      `;

      listItems.push(listItem);

      draggable_list.appendChild(listItem);
    });

  addEventListener();
}

function dragStart() {
  // console.log('Event:', 'dragstart');
  dragStartIndex = +this.closest('li').getAttribute('data-index');
  // console.log(dragStartIndex);
}

function dragEnter() {
  // console.log('Event:', 'dragenter');
  this.classList.add('over');
}

function dragLeave() {
  // console.log('Event:', 'dragleave');
  this.classList.remove('over');
}

function dragOver(e) {
  // console.log('Event:', 'dragover');
  e.preventDefault();
}

function dragDrop() {
  // console.log('Event:', 'dragdrop');
  const dragEndIndex = +this.getAttribute('data-index');
  swapItems(dragStartIndex, dragEndIndex);

  this.classList.remove('over');
}

// Swap list items that are drag and drop
function swapItems(fromIndex, toIndex) {
  const itemOne = listItems[fromIndex].querySelector('.draggable');
  const itemTwo = listItems[toIndex].querySelector('.draggable');

  listItems[fromIndex].appendChild(itemTwo);
  listItems[toIndex].appendChild(itemOne);
}

// Check the order of list items
function checkOrder() {
  listItems.forEach((listItem, index) => {
    const personName = listItem.querySelector('.draggable').innerText.trim();

    if (personName !== richestPeople[index]) {
      listItem.classList.add('wrong');
    } else {
      listItem.classList.remove('wrong');
      listItem.classList.add('right');
    }
  });
}

function addEventListener() {
  const draggables = document.querySelectorAll('.draggable');
  const dragListItems = document.querySelectorAll('.draggable-list li');

  draggables.forEach(draggable => {
    draggable.addEventListener('dragstart', dragStart);
  })

  dragListItems.forEach(item => {
    item.addEventListener('dragover', dragOver);
    item.addEventListener('drop', dragDrop);
    item.addEventListener('dragenter', dragEnter);
    item.addEventListener('dragleave', dragLeave);
  });
}

initializeDOM();
check.addEventListener('click', checkOrder);