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
            background-image: url(/photo/footballturf.jpg);
            background-size: cover;
            position: relative;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        h1 {
            color: #000000;
        }

        .calendar-container {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            margin: auto; /* Center horizontally */
            margin-top: 10%; /* Adjust the vertical margin as needed */
            background-color: rgb(132, 142, 178);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 80%;
            height: 60% ;/* Set height to 50% of the viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #calendar {
            padding: 10%;
        }
        #calender p input{
            width: 100%;
        }

        .calendar-container h2 {
            color: #080000;
        }

        .time-slot {
            margin: 10px;
        }

        .selected {
            border: 2px solid green;
        }

        form {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        form h1, form h2 {
            color: #020000;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #000000;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"] {
            position: relative;
            width: 100%;
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
            display: grid;
            grid-template-columns: .5fr 1.5fr;
            gap: 24px;
            padding: 24px;
        }
        .time_slots{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
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
                    <span>9:00 AM - 10:00 AM</span>
                    <button onclick="bookSlot('9:00', 'slot9')">Book</button>
                </div>
                <div class="time-slot" id="slot10">
                        <span>10:00 AM - 11:00 AM</span>
                        <button onclick="bookSlot('10:00', 'slot10')">Book</button>
                    </div>
                    <div class="time-slot" id="slot11">
                        <span>11:00 AM - 12:00 PM</span>
                        <button onclick="bookSlot('11:00', 'slot11')">Book</button>
                    </div>
                    <div class="time-slot" id="slot12">
                        <span>12:00 PM - 01:00 PM</span>
                        <button onclick="bookSlot('12:00', 'slot12')">Book</button>
                    </div> 
                    
                    <div class="time-slot" id="slot13">
                        <span>01:00  PM  - 02:00 PM</span>
                        <button onclick="bookSlot('13:00', 'slot13')">Book</button>
                    </div>
                     <div class="time-slot" id="slot14">
                        <span>02:00 PM  - 03:00 PM</span>
                        <button onclick="bookSlot('14:00', 'slot14')">Book</button>
                    </div>
                     <div class="time-slot" id="slot15">
                        <span>03:00  PM  - 04:00 PM</span>
                        <button onclick="bookSlot('15:00', 'slot15')">Book</button>
                    </div>
                     <div class="time-slot" id="slot16">
                        <span>04:00  PM  - 05:00 PM</span>
                        <button onclick="bookSlot('15:00', 'slot16')">Book</button>
                    </div> 
                    <div class="time-slot" id="slot17">
                        <span>05:00  PM  - 06:00 PM</span>
                        <button onclick="bookSlot('16:00', 'slot17')">Book</button>
                    </div> 
                    <div class="time-slot" id="slot18">
                        <span>06:00 PM  - 07:00 PM</span>
                        <button onclick="bookSlot('17:00', 'slot18')">Book</button>
                    </div> 
                    <div class="time-slot" id="slot19">
                        <span>07:00 PM - 08:00 PM</span>
                        <button onclick="bookSlot('18:00', 'slot19')">Book</button>
                    </div> 
                    <div class="time-slot" id="slot20">
                        <span>08:00 PM - 09:00 PM</span>
                        <button onclick="bookSlot('19:00', 'slot20')">Book</button>
                    </div> 
                    <div class="time-slot" id="slot21">
                        <span>09:00 PM - 10:00 PM</span>
                        <button onclick="bookSlot('20:00', 'slot21')">Book</button>
                    </div>
                    <div class="time-slot" id="slot22">
                        <span>10:00 PM - 11:00 PM</span>
                        <button onclick="bookSlot('21:00', 'slot22')">Book</button>
                    </div>  
                      <div class="time-slot" id="slot2">
                        <span>11:00 PM - 12:00 PM</span>
                        <button onclick="bookSlot('22:00', 'slot23')">Book</button>
                    </div>
                <!-- Add more time slots as needed -->
            </div>
        </div>
        <form id="bookingForm" action="your_action.php" method="post" onsubmit="return validateForm()">
            <input type="hidden" id="selectedSlots" name="selectedSlots">
            <button type="submit">Confirm Booking</button>
        </form>
    </div>
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
