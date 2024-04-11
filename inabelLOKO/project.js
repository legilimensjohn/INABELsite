// JavaScript code for subscribing to the newsletter
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("#newsletter form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        const emailInput = document.querySelector("#newsletter input[type='email']");
        const email = emailInput.value.trim();
        if (email !== "") {
            // Here you can add code to handle the subscription, such as sending the email to a server
            console.log("Subscribed with email:", email);
            // Optionally, you can reset the input field
            emailInput.value = "";
            alert("Thank you for subscribing to our newsletter!");
        } else {
            alert("Please enter a valid email address.");
        }
    });
});
