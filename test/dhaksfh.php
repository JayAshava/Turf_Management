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

        .calendar-container h2 {
            color: #080000;
        }

        .time-slot {
            margin: 10px;
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

        .time_slots {
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
                    <h2>Time Slots</h2>
                    <!-- Time slots -->
                    <div class="time-slot">
                        <span>9:00 AM - 10:00 AM</span>
                        <button onclick="bookSlot('10:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>10:00 AM - 11:00 AM</span>
                        <button onclick="bookSlot('10:00')">Book</button>
                    </div>
                    <div class="time-slot">
                        <span>11:00 AM - 12:00 PM</span>
                        <button onclick="bookSlot('11:00')">Book</button>
                    </div>
                    <!-- Add more time slots as needed -->
                </div>
            </div>
        </div>
    </div>
    <script>
        function bookSlot(slot) {
            var selectedDate = new Date(document.getElementById('date').value);
            var currentDate = new Date();
            var bookingPeriod = 7; // Booking period in days
            var endDate = new Date(currentDate.getTime() + bookingPeriod * 24 * 60 * 60 * 1000);

            if (selectedDate >= currentDate && selectedDate <= endDate) {
                document.getElementById('selectedSlot').value = slot;
                document.getElementById('bookingForm').submit();
            } else {
                document.getElementById('dateWarning').style.display = 'inline';
                setTimeout(function () {
                    document.getElementById('dateWarning').style.display = 'none';
                }, 3000); // Hide the warning after 3 seconds
            }
        }
    </script>
</body>
</html>
