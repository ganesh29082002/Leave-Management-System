const startDateInput = document.getElementById('fromDateId');
const endDateInput = document.getElementById('toDateId');
const totalDaysInput = document.getElementById('totalDaysId');

// Add event listeners to the date inputs
startDateInput.addEventListener('change', calculateTotalDays);
endDateInput.addEventListener('change', calculateTotalDays);

function calculateTotalDays() {
  alert("hello")
  const startDate = new Date(startDateInput.value);
  const endDate = new Date(endDateInput.value);
  
  // Calculate the difference in days
  const timeDiff = endDate.getTime() - startDate.getTime();
  const totalDays = Math.floor(timeDiff / (1000 * 60 * 60 * 24)) + 1;
  
  // Display the total days in the input field
  totalDaysInput.value = totalDays;
}
