document.addEventListener("DOMContentLoaded", function() {
    var calendar = document.getElementById("calendar");
    var slots = generateSlots();

    slots.forEach(function(slot) {
        var slotElement = document.createElement("div");
        slotElement.className = "slot";
        slotElement.textContent = slot.time;
        slotElement.dataset.time = slot.time;
        slotElement.addEventListener("click", function() {
            bookSlot(slot.time);
        });
        calendar.appendChild(slotElement);
    });
});

function generateSlots() {
    var slots = [];
    for (var hour = 9; hour < 10; hour++) {
        var time = hour + ":00 am";
        slots.push({ time: time });
    }
    return slots;
}

function bookSlot(time) {
    // Send an AJAX request to the PHP backend to book the slot
    console.log("Booking slot for " + time);
    // You can implement AJAX using XMLHttpRequest, Fetch API, or libraries like Axios
    // Example: send AJAX request to backend PHP script
    /*
    fetch('book_slot.php', {
        method: 'POST',
        body: JSON.stringify({ time: time }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        // Handle response
    })
    .catch(error => {
        // Handle error
    });
    */
}