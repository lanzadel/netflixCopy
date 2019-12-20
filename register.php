<?php


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Reeceflix</title>
        <link rel="stylesheet" href="assets/style/style.css" type="text/css">
    </head>
    <body>

        <div class="signInContainer">
            <div class="column">

                <div class="header">
                    <img src="assets/images/logo.png" title="logo" alt="Site Logo" />
                    <h3>Sign Up</h3>
                    <span>to continue to Reeceflix</span>
                </div>

                <form action="" method="post">
                    <input type="text" name="firstName" placeholder="firstName" required>
                    <input type="text" name="lastName" placeholder="lastName" required>
                    <input type="text" name="username" placeholder="username" required>
                    <input type="email" name="email" placeholder="email" required>
                    <input type="email" name="confirmEmail" placeholder="confirmEmail" required>
                    <input type="password" name="password" placeholder="password" required>
                    <input type="password" name="confirmPassword" placeholder="confirmPassword" required>
                    <input type="submit" name="submitButton" value="SUBMIT">
                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
                
            </div>
        </div>


    </body>
</html>