const days = document.getElementById('days');
const hours = document.getElementById('hours');
const minutes = document.getElementById('minutes');
const seconds = document.getElementById('seconds');
const countdown = document.getElementById('countdown');
const year = document.getElementById('year');
const loading = document.getElementById('loading');

const currentYear = new Date().getFullYear();

const newYearTime = new Date(`January 01 ${currentYear + 1} 00:00:00`);

// Set background year
year.innerText = currentYear + 1;

// Update countdown time
function updateCountdown() {
  const currentTime = new Date();
  const differenceInMilliseconds = newYearTime - currentTime;

  const daysUntilNextYear = Math.floor(differenceInMilliseconds / 1000 / 60 / 60 / 24);
  const hoursUntilNextYear = Math.floor(differenceInMilliseconds / 1000 / 60 / 60) % 24;
  const minutesUntilNextYear = Math.floor(differenceInMilliseconds / 1000 / 60) % 60;
  const secondsUntilNextYear = Math.floor(differenceInMilliseconds / 1000) % 60;

  // Add values to DOM
  days.innerHTML = daysUntilNextYear;
  hours.innerHTML = appendLeadingZero(hoursUntilNextYear);
  minutes.innerHTML = appendLeadingZero(minutesUntilNextYear);
  seconds.innerHTML = appendLeadingZero(secondsUntilNextYear);
}

function appendLeadingZero(number) {
  return number < 10 ? '0' + number : number;
}

// Show spinner before countdown
setTimeout(() => {
  loading.remove();
  countdown.style.display = 'flex';
}, 1000);

// Run every second
setInterval(updateCountdown, 1000);