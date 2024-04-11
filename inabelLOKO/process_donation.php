<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $amount = $_POST["amount"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Perform validation (You can add more robust validation as needed)
    if (empty($amount) || empty($name) || empty($email)) {
        // If any field is empty, redirect back to the donation page with an error message
        header("Location: donate.html?error=empty_fields");
        exit();
    }

    // Here you can add code to process the donation, such as saving it to a database, sending an email, etc.
    // For demonstration purposes, let's just display the donation information
    echo "Thank you, $name, for your donation of $amount USD. We appreciate your support!";
} else {
    // If the form is not submitted, redirect back to the donation page
    header("Location: donate.html");
    exit();
}
?>
