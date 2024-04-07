<?php
if (isset($_POST['signup-submit'])) {
    require "./ProjectX/include/sign-up.inc.php";

    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_rpt = $_POST['password-rpt'];

    // Validate form data (e.g., check for empty fields, validate email format, etc.)

    // Process the signup (insert data into the database, handle errors, etc.)
}
?>

