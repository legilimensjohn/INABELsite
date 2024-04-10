<?php
if (isset($_POST['signup-submit'])) {
    require '../dbh.inc.php'; // Adjusted path to include the parent directory

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_rpt = $_POST['password-rpt'];

    // Check if passwords match
    if ($password != $password_rpt) {
        header("Location: ../signup.php?error=passwordcheck&fname=$fname&lname=$lname&email=$email");
        exit();
    } else {
        // Check if email already exists
        $sql = "SELECT user_email FROM users WHERE user_email=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: ../signup.php?error=emailtaken&email=$email");
                exit();
            } else {
                // Insert user into database
                $sql = "INSERT INTO users (user_fname, user_lname, user_email, user_pwd) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedpwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header("Location: ../signup.php");
    exit();
}
?>
