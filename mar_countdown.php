<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Luz</title>
   
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <nav>
        <a href="mar.php">Home</a>
        <a href="application.php">Pilot Application</a>
        <a href="mar_countdown.php">Mars Countdown</a>
    </nav>
    <?php
// Set the timezone for our Mars departure
date_default_timezone_set("America/New_York");

// Set the next departure date
$departure_date = "2026-12-24 11:00";

// Convert the departure date into seconds
$departure_time = strtotime($departure_date);

// Get the current time in seconds
$now = time();

// Calculate the seconds until departure
$seconds_left = $departure_time - $now;

// Constants for time calculations
define("MINUTE", 60);
define("HOUR", 3600);
define("DAY", 86400);

// Make sure the countdown does not go negative
if ($seconds_left < 0) {
    $seconds_left = 0;
}

// Calculate days, hours, and minutes
$days = floor($seconds_left / DAY);
$hours = floor(($seconds_left % DAY) / HOUR);
$minutes = floor(($seconds_left % HOUR) / MINUTE);

?>
   <!-- Page title -->
    <h1><?php echo "La Luz Mars Countdown"; ?></h1>

    <h2>A New Light on Mars</h2>

    <p>
        Get ready for an unforgettable adventure!
        Our next journey to Mars is almost here.
    </p>

    <!-- Departure information -->
    <h3>Next Departure: December 24, 2026</h3>
    <p>Takeoff Time: 11:00 AM Eastern</p>

    <!-- PHP displays the countdown when the page loads -->
    <h2 id="countdown">
        <?php
        echo $days . " days, " .
             $hours . " hours, " .
             $minutes . " minutes";
        ?>
    </h2>

    <!-- Display the departure message -->
    <p id="launchMessage">
       
    </p>
   <!-- Give JavaScript the departure time -->
    <script>
        const departureTime = <?php echo $departure_time * 1000; ?>;
    </script>
<script src="main-code.js"></script>
</body>
</html>