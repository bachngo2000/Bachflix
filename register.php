<?php

    if(isset($_POST["submitButton"])) {
        echo "Thank You! Your form was successfully submitted";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Welcome to Bachflix </title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
    </head>
    <body>
        <div class="signInContainer">
            <div class="column">

                <div class="header">
                    <img src="assets/images/logo.png" title="Logo" alt="Site Logo"/>
                    <h3> Sign Up </h3>
                    <span> to continue to Bachflix </span>
                </div>

                <form method="POST">
                    <input type="text" name="firstName" placeholder="First Name" required>

                    <input type="text" name="lastName" placeholder="Last Name" required>

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="email" name="email" placeholder="example@example.com" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <input type="password" name="password" placeholder="Enter a safe password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage"> Already have an account? Sign in here! </a>

            </div>

        </div>
    </body>
    
</html>