<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Booking Form</title>
    <style>
       body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    background: linear-gradient(135deg, #2980b9, #6dd5fa, #ffffff); /* colorful gradient background */
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background-color: rgba(255, 255, 255, 0.8); /* semi-transparent white background */
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    padding: 20px;
    max-width: 800px;
    width: 100%;
}

h1 {
    color: #333;
    text-align: center;
}

.calendar-container, .timeslots_container {
    flex: 1;
}

.calendar-container {
    margin-right: 20px;
}

.calendar-container, .timeslots_container {
    background-color: #f9f9f9;
    border-radius: 10px;
    padding: 20px;
}

h2 {
    color: #333;
    margin-bottom: 10px;
}

.time-slot {
    margin-bottom: 10px;
}

.selected {
    border: 2px solid green;
}

form {
    margin-top: 20px;
    text-align: center;
}

input[type="date"] {
    width: calc(100% - 10px);
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    width: calc(100% - 10px);
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #38354cd3;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #003d2b;
}

.slot_booking_form {
    display: flex;
    flex-wrap: wrap;
}

.time_slots {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 10px;
}

    </style>
</head>
<body>
<div class="container">
    <h1>Slot Booking Form</h1>
    <div class="slot_booking_form">
        <div class="calendar-container">
            <h2>Calendar</h2>
            <div id="calendar">
                <!-- Placeholder for calendar -->
                <!-- You can replace this with your calendar implementation -->
                <p><input type="date" id="date" name="date" required></p>
                <span id="dateWarning" style="color: red; display: none;">Please select a date within 7 days.</span>
            </div>
        </div>
        <div class="timeslots_container">
            <div class="time_slots">
                <!-- Time slots -->
                <h2>Time Slots</h2>
                <div class="time-slot" id="slot9">
                    <select onchange="bookSlot(this.value, 'slot9')">
                        <option value="">Select</option>
                        <option value="9:00">9:00 AM - 10:00 AM</option>
                        <option value="10:00">10:00 AM - 11:00 AM</option>
                        <!-- Add more time slots as needed -->
                    </select>
                </div>
                <!-- Add more time slots as needed -->
            </div>
        </div>
    </div>
    <form id="bookingForm" action="your_action.php" method="post" onsubmit="return validateForm()">
        <input type="hidden" id="selectedSlots" name="selectedSlots">
        <button type="submit">Confirm Booking</button>
    </form>
</div>
<script>
    var selectedSlots = [];

    function bookSlot(slot, slotId) {
        var index = selectedSlots.indexOf(slot);
        if (index === -1) {
            selectedSlots.push(slot);
            document.getElementById('selectedSlots').value = selectedSlots.join(', ');
            document.getElementById(slotId).classList.add('selected');
        } else {
            selectedSlots.splice(index, 1);
            document.getElementById('selectedSlots').value = selectedSlots.join(', ');
            document.getElementById(slotId).classList.remove('selected');
        }
    }

    function validateForm() {
        var selectedDate = document.getElementById('date').value;
        if (!selectedDate) {
            alert('Please select a date.');
            return false;
        } else {
            return true;
        }
    }

    // Disable dates before current date and after 7 days
    var currentDate = new Date().toISOString().split('T')[0];
    document.getElementById('date').setAttribute('min', currentDate);

    var maxDate = new Date();
    maxDate.setDate(maxDate.getDate() + 7);
    var maxDateString = maxDate.toISOString().split('T')[0];
    document.getElementById('date').setAttribute('max', maxDateString);
</script>
</body>
</html>
