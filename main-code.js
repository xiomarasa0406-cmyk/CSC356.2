
// the welcome message
function welcomeMars() {
    document.getElementById("message").innerHTML =
        "Welcome to La Luz! Enjoy your stay on Mars!";
}

// Updates our Mars countdown every minute
function updateCountdown() {

    // Get the current time
    let now = Date.now();

    // Calculate how much time is left
    let timeLeft = departureTime - now;

    // Stop counting when the launch time is reached its date
    if (timeLeft < 0) {
        timeLeft = 0;
    }

    // Calculate the days, hours, and minutes 
    let days = Math.floor(timeLeft / 86400000);
    let hours = Math.floor((timeLeft / 3600000) % 24);
    let minutes = Math.floor((timeLeft / 60000) % 60);

    // Display the countdown
    document.getElementById("countdown").innerHTML =
        days + " days, " + hours + " hours, " +
        minutes + " minutes";

    // Display different messages so it will have a different message when the countdown is less than a week and when it reaches zero
    if (timeLeft == 0) {
        document.getElementById("launchMessage").innerHTML =
            "Our Mars adventure has begun!";
    }
    else if (timeLeft < 604800000) {
        document.getElementById("launchMessage").innerHTML =
            "Pack your bags! Mars is waiting!";
    }
    else {
        document.getElementById("launchMessage").innerHTML =
            "Your adventure to Mars is coming soon!";
    }
}

// Run the countdown when the page loads
updateCountdown();

// Update the countdown every 60 seconds
setInterval(updateCountdown, 60000);
