let date = new Date();
const datetimePicker = document.getElementById("datetimepicker");

const formattedDate = `${date.getFullYear()}-${(date.getMonth() + 1)
    .toString()
    .padStart(2, "0")}-${date.getDate().toString().padStart(2, "0")}`;

datetimePicker.value = formattedDate;
