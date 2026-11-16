<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Luz</title>
    <script src="main-code.js"></script>
    <link rel="stylesheet" href="main.css">

</head>
<body>

<!-- Navigation menu -->
<nav>
    <a href="mar.php">Home</a>
    <a href="application.php">Pilot Application</a>
    <a href="mar_countdown.php">Mars Countdown</a>
</nav>

    <h1>Welcome to the La Luz </h1>
    <h2> A new light on mars  </h2>
    
<!-- Welcome button -->
<button onclick="welcomeMars()">
    Welcome to Mars!
    <p id="message"></p>
</button>

    <hr>
    <h3> About La Luz</h3>
   

    <p>
        Interested in becoming a pilot for La Luz?
        Complete the application below to join our team!
    </p>

    <!-- Application form -->
    <form action="submit.php" method="post"
          onsubmit="return validateForm()">

       
        <label for="name">Full Name:</label>
        <input type="text" name="name">
        <br><br>

      
        <label for="email">Email Address:</label>
        <input type="email"  name="email">
        <br><br>

       
        <label for="age">Age:</label>
        <input type="number"name="age">
        <br><br>

       
        <label for="missions">Space Missions Completed:</label>
        <input type="number" name="missions">
        <br><br>

      
        <label for="reason">Why do you want to join La Luz?</label>
        <br>
        <textarea id="reason" name="reason"></textarea>
        <br><br>

      
        <button type="submit">Submit Application</button>

    </form>

</body>
</html>