const monthPicker = document.getElementById("month-picker");
const yearElement = document.getElementById("year");
const calendarDays = document.querySelector(".calendar-days");
const prevNextBtns = document.querySelectorAll(".year-change");

const date = new Date();
let curYear = date.getFullYear();
let curMonth = date.getMonth();

const months = [
  "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", 
  "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"
];

const renderCalendar = () => {
  const firstDayOfMonth = new Date(curYear, curMonth, 1).getDay();
  const lastDateOfMonth = new Date(curYear, curMonth + 1, 0).getDate();
  const lastDayOfMonth = new Date(curYear, curMonth, lastDateOfMonth).getDay();
  const lastDateOfLastMonth = new Date(curYear, curMonth, 0).getDate();

  let daysHTML = "";

  // Agregar días del mes anterior
  for (let i = firstDayOfMonth; i > 0; i--) {
    daysHTML += `<div class="inactive">${lastDateOfLastMonth - i + 1}</div>`;
  }

  // Agregar días del mes actual
  for (let i = 1; i <= lastDateOfMonth; i++) {
    const isToday = i === date.getDate() && curMonth === date.getMonth() && curYear === date.getFullYear() ? "current-day" : "";
    daysHTML += `<div class="${isToday}">${i}</div>`;
  }

  // Agregar días del siguiente mes
  for (let i = lastDayOfMonth; i < 6; i++) {
    daysHTML += `<div class="inactive">${i - lastDayOfMonth + 1}</div>`;
  }

  // Actualizar DOM
  calendarDays.innerHTML = daysHTML;
  monthPicker.textContent = months[curMonth];
  yearElement.textContent = curYear;
};

renderCalendar();

prevNextBtns.forEach(button => {
  button.addEventListener("click", () => {
    curMonth = button.id === "prev" ? curMonth - 1 : curMonth + 1;
    if (curMonth < 0 || curMonth > 11) {
      const newDate = new Date(curYear, curMonth);
      curYear = newDate.getFullYear();
      curMonth = newDate.getMonth();
    }
    renderCalendar();
  });
});
