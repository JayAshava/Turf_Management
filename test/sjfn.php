<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Booking Form</title>
    <link rel="stylesheet" href="">
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
                    <div class="time-slot">
                        <span>9:00 AM - 10:00 AM</span>
                        <button onclick="bookSlot('10:00')">Book</button>
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

        // Disable dates after 7 days
        var maxDate = new Date();
        maxDate.setDate(maxDate.getDate() + 7);
        var maxDateString = maxDate.toISOString().split('T')[0];
        document.getElementById('date').setAttribute('max', maxDateString);
    </script>
</body>
</html>






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