<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Booking</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url(/xampp/htdocs/project6/photo/pexels-markus-spiske-114296.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        form {
            width: 400px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Add margin-top to separate form from h2 */
            position: relative; /* Add position relative */
        }

        h2 {
            position: absolute; /* Position absolute */
            top: -30px; /* Adjust the top position as needed */
            left: 50%; /* Move to the center */
            transform: translateX(-50%); /* Center horizontally */
            background-color: rgba(51, 51, 51, 0.5); /* Transparent background */
            font-family: serif;
            font-size: 26px;
            color: white;
            text-align: center;
            margin: 0;
            padding: 10px; /* Add padding to increase visibility */
            border-radius: 10px; /* Optional: Add border-radius for better appearance */
        }

        /* Your other CSS styles here */

        form label {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #ccc;
        }

        form input[type="date"],
        form input[type="text"],
        form input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #333;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.3);
            transition: border-color 0.4s ease, background-color 0.3s ease, color 0.3s ease;     
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td a {
            margin-right: 5px;
            text-decoration: none;
            color: #333;
        }

        td a:hover {
            color: red;
        }
      form select#start_time {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #333;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: rgba(255, 255, 255, 0.3);
    transition: border-color 0.4s ease, background-color 0.3s ease, color 0.3s ease;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Change font family */
    font-weight: bold; /* Change font weight */
    color: #333; /* Change font color */
}
  /* Arrange time slots in a single line */
  .time-slots {
    color:#ccc;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    /* Style for each time slot checkbox */
    .time-slot {
        display: flex;
        align-items: center;
    }

    .time-slot input[type="checkbox"] {
        margin-right: 5px; /* Add some space between the checkbox and the text */
    }
</style>

    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Booking</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
<form action="" method="post" onsubmit="return validateDateSlots()">
    <h2>Slot Booking</h2>
    <label for="name">User Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required ><br>
    <label for="start_time">Start Time:</label>
    <input type="time" id="start_time" name="start_time" required readonly><br>
    <label for="end_time">End Time:</label>
    <input type="time" id="end_time" name="end_time" required readonly><br>
    <label>Available Time Slots:</label><br>
    <div class="time-slots">
    <?php
    // Generate checkboxes for time slots with one-hour gap from 9AM to 11PM
    $timeSlots = [];
    for ($hour = 9; $hour < 23; $hour++) {
        $formattedHour = str_pad($hour, 2, '0', STR_PAD_LEFT);
        $formattedHourNext = str_pad($hour + 1, 2, '0', STR_PAD_LEFT);
        $meridiem = $hour < 12 ? 'AM' : 'PM';
        $formattedHour12 = $hour > 12 ? $hour - 12 : $hour;
        $meridiemEnd = $hour + 1 < 12 ? 'AM' : 'PM';
        $formattedHour12End = ($hour + 1) > 12 ? $hour + 1 - 12 : $hour + 1;
        $timeSlot = sprintf("%02d:00 %s - %02d:00 %s", $formattedHour12, $meridiem, $formattedHour12End, $meridiemEnd);
        $timeSlots[$formattedHour] = $timeSlot;
    }

    ksort($timeSlots); // Sort time slots in ascending order

    foreach ($timeSlots as $hour => $timeSlot) {
        echo "<div class='time-slot'><input type='checkbox' name='start_time[]' value='{$hour}:00' data-end-time='" . (($hour + 1) % 24) . ":00'><span>{$timeSlot}</span></div>";
    }
    ?>
    </div>
    <input type="submit" name="add_slot" class="btn btn-primary" value="Add Slot">
</form>

<script>
    // JavaScript to update Start Time and End Time fields
    const checkboxes = document.querySelectorAll('.time-slot input[type="checkbox"]');
    const startTimeField = document.getElementById('start_time');
    const endTimeField = document.getElementById('end_time');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            const checkedCheckboxes = Array.from(checkboxes).filter(c => c.checked);
            if (checkedCheckboxes.length === 0) {
                startTimeField.value = '';
                endTimeField.value = '';
            } else {
                startTimeField.value = checkedCheckboxes[0].value;
                endTimeField.value = checkedCheckboxes[checkedCheckboxes.length - 1].getAttribute('data-end-time');
            }
        });
    });

    // Function to validate selected slots
    function validateDateSlots() {
        // Date validation
        var selectedDate = document.getElementById('date').value;
        var currentDate = new Date().toISOString().split('T')[0];
        var maxBookingDate = new Date();
        maxBookingDate.setDate(maxBookingDate.getDate() + 7);
        var maxBookingDateString = maxBookingDate.toISOString().split('T')[0];
        if (selectedDate < currentDate || selectedDate > maxBookingDateString) {
            alert('Please select a date between today and 7 days from today.');
            document.getElementById('date').value = ''; // Clear out date field
            document.querySelectorAll('.time-slot input[type="checkbox"]:checked').forEach(checkbox => {
            checkbox.checked = false;
            });
            return false;
        }
        
        const checkedCheckboxes = Array.from(document.querySelectorAll('.time-slot input[type="checkbox"]:checked'));
        if (checkedCheckboxes.length === 0) {
            alert('Please select at least one time slot.');
            return false;
         }
         else{
            var selectedTime = document.getElementById('start_time').value;
            var currentTime = new Date().toTimeString().split(' ')[0];
            if (selectedDate === currentDate && selectedTime < currentTime) {
                alert('Please select a time after the current time.');
                document.getElementById('start_time').value = ''; // Clear out time field
                document.querySelectorAll('.time-slot input[type="checkbox"]:checked').forEach(checkbox => {
                checkbox.checked = false;
                });
                return false;
            }
         }
        for (let i = 1; i < checkedCheckboxes.length; i++) {
            const currentSlot = parseInt(checkedCheckboxes[i].value.split(':')[0]);
            const prevSlot = parseInt(checkedCheckboxes[i - 1].value.split(':')[0]);
            if (currentSlot !== prevSlot + 1) {
                alert('Please select consecutive time slots.');
                checkedCheckboxes.forEach(checkbox => {
                    checkbox.checked = false;
                });
                return false;
            }
        }
        return true;
    }
</script>

</body>
</html>

<?php
// PHP code for adding a new slot to the database
if(isset($_POST['add_slot'])) {
    $date = $_POST['date'];
    $name = $_POST['name'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    // Construct the SQL query to insert a new slot
    $sql = "INSERT INTO slots (date, name, start_time, end_time) VALUES ('$date', '$name', '$start_time', '$end_time')";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>