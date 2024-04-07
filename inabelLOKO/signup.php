<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup | ABELoco</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleX.css">
    <link rel="stylesheet" href="signup.css">
    <script src="project.js"></script>
</head>
<body>

<header>
    <div class="container">
        <h1><span class="high">AbelLux</span> INABEL ILOCO Essence </h1>
        <div id="brand">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="History.php">History</a></li>
                    <li><a href="Events.php">Events</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="head">
    <h1>Donation</h1>
</div>

<div class="split-screen">
    <div class="left">
        <section class="copy">
            <h1>Join the extravagant family</h1>
            <p>Get exclusive, frequent updates</p>
        </section>
    </div>
    <div class="right">
        <form method="POST">

            <section class="copy">
                <h2>Sign Up</h2>

                <?php
                if(isset($_GET["error"])) {

                    if($_GET['error'] == "passwordcheck") {
                        echo "<p class='signuperror'>Retype the same password in both fields</p>";
                    }

                    else if($_GET['error'] == "emailtaken") {
                        echo "<p class='signuperror'>
                      This email address already has an account. Enter a new email address.</p>";
                    }
                }

                else if(isset($_GET['sign-up']) && $_GET['sign-up'] == "success") {
                    echo "<p class='signupsuccess'>Signup successful</p>";
                }
                ?>

                <div class="login">
                    <p>Already have an account? <a href="login.php">
                            <b>Log In</b>
                        </a></p>
                </div>
            </section>

            <div class="input-container">
                <label id="fname">First Name</label>
                <input id="fname" name="fname" type="text">
                <label id="lname">Last Name</label>
                <input id="lname" name="lname" type="text">
                <label id="email">Email</label>
                <input id="email" name="email" type="email">
                <label id="pwd">Password</label>
                <input id="pwd" name="password" type="password" placeholder="Must be at least 6 characters">
                <label id="pwd-rpt">Confirm Password</label>
                <input id="pwd-rpt" name="password-rpt" type="password" placeholder="Confirm your password here">
                <button type="submit" class="signup-btn" value="submit" name="signup-submit">Sign Up</button>
                <section class="legal">
                    <p><span class="small">
                    By continuing, you accept our <b>Terms and conditions</b>
                  </span></p>
                </section>
            </div>
        </form>
    </div>
</div>

<footer style="text-align: center;">
    <p><strong>AbelLux INABEL ILOCO Essence, &copy;2024 </strong></p>
</footer>

</body>
</html>
