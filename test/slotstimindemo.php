<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Booking Form</title>
    <link rel="stylesheet" href="/css/bookingslot.css"> <!-- You can create your own CSS file for styling -->
    <style>
        /* bookingslot.css */

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1,
        h2 {
            text-align: center;
        }

        /* Slot Booking Form styles */
        .slot_booking_form {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .calendar-container,
        .timeslots_container {
            flex: 1 1 45%;
            margin-bottom: 20px;
        }

        .calendar-container {
            border-right: 1px solid #ccc;
            padding-right: 20px;
        }

        .calendar-container h2,
        .timeslots_container h2 {
            margin-bottom: 10px;
        }

        /* Time Slots styles */
        .time_slots {
            display: flex;
            flex-wrap: wrap;
        }

        .time-slot {
            width: 100%;
            margin-bottom: 10px;
        }

        .time-slot span {
            display: inline-block;
            width: 60%;
        }

        .time-slot button {
            display: inline-block;
            width: 35%;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        /* Responsive styles */
        @media (max-width: 600px) {
            .calendar-container,
            .timeslots_container {
                flex-basis: 100%;
                border-right: none;
                padding-right: 0;
            }

            .time-slot span {
                width: 70%;
            }

            .time-slot button {
                width: 25%;
            }
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
                </div>
            </div>
            <div class="timeslots_container">
                <h2>Time Slots</h2>
                <div class="time_slots">
                    <div class="time-slot">
                        <span>09:00 AM - 10:00 AM</span>
                        <button onclick="bookSlot('09:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>10:00 AM - 11:00 AM</span>
                        <button onclick="bookSlot('10:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>11:00 AM - 12:00 PM</span>
                        <button onclick="bookSlot('11:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>12:00 PM - 01:00 PM</span>
                        <button onclick="bookSlot('12:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>01:00 PM - 02:00 PM</span>
                        <button onclick="bookSlot('13:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>02:00 PM - 03:00 PM</span>
                        <button onclick="bookSlot('14:00')">Book</button>
                    </div><div class="time-slot">
                        <span>03:00 PM - 04:00 PM</span>
                        <button onclick="bookSlot('15:00')">Book</button>
                    </div><div class="time-slot">
                        <span>04:00 PM - 05:00 PM</span>
                        <button onclick="bookSlot('16:00')">Book</button>
                    </div><div class="time-slot">
                        <span>05:00 PM - 06:00 PM</span>
                        <button onclick="bookSlot('17:00')">Book</button>
                    </div><div class="time-slot">
                        <span>06:00 PM - 07:00 PM</span>
                        <button onclick="bookSlot('18:00')">Book</button>
                    </div><div class="time-slot">
                        <span>07:00 PM - 08:00 PM</span>
                        <button onclick="bookSlot('19:00')">Book</button>
                    </div><div class="time-slot">
                        <span>08:00 PM - 09:00 PM</span>
                        <button onclick="bookSlot('20:00')">Book</button>
                    </div><div class="time-slot">
                        <span>09:00 PM - 10:00 PM</span>
                        <button onclick="bookSlot('21:00')">Book</button>
                    </div><div class="time-slot">
                        <span>10:00 PM - 11:00 PM</span>
                        <button onclick="bookSlot('22:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>11:00 PM - 12:00 AM</span>
                        <button onclick="bookSlot('23:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>12:00 AM - 01:00 AM</span>
                        <button onclick="bookSlot('00:00')">Book</button>
                    </div>
                    <!-- Add more time slots as needed -->
                </div>
            </div>
        </div>

    </div>
    <script src="calendar.js"></script> <!-- You need to create calendar.js file for calendar functionality -->
    <script>
        function bookSlot(slot) {
            document.getElementById('selectedSlot').value = slot;
            document.getElementById('bookingForm').submit();
        }
    </script>
</body>

</html>
