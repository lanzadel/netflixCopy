<?php
    require_once ("includes/config.php");
    require_once ("includes/classes/FormSanitizer.php");
    require_once ("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST['submitButton'])) {
        $firstName = FormSanitizer::sanitizeFormString($_POST['firstName']);
        $lastName = FormSanitizer::sanitizeFormString($_POST['lastName']);
        $username = FormSanitizer::sanitizeFormUsername($_POST['username']);
        $email = FormSanitizer::sanitizeFormEmail($_POST['email']);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST['confirmEmail']);
        $password = FormSanitizer::sanitizeFormPassword($_POST['password']);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST['confirmPassword']);

        $success = $account->register($firstName, $lastName, $username, $email, $email2, $password, $password2);
        if($success) {
            //store session
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }
    function getInputValues($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }

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
                    <?php echo $account->getError(Constants::$firstNameCharacters) ?>
                    <input type="text" name="firstName" placeholder="firstName" value="<?php getInputValues("firstName") ?>" required>
                    <?php echo $account->getError(Constants::$lastNameCharacters) ?>
                    <input type="text" name="lastName" placeholder="lastName" value="<?php getInputValues("lastName") ?>" required>
                    <?php echo $account->getError(Constants::$userNameCharacters) ?>
                    <?php echo $account->getError(Constants::$usernameTaken) ?>
                    <input type="text" name="username" placeholder="username" value="<?php getInputValues("username") ?>" required>
                    <?php echo $account->getError(Constants::$emailsDontMatch) ?>
                    <input type="email" name="email" placeholder="email" value="<?php getInputValues("email") ?>" required>
                    <?php echo $account->getError(Constants::$usernameTaken) ?>
                    <input type="email" name="confirmEmail" placeholder="confirmEmail" value="<?php getInputValues("confirmEmail") ?>" required>
                    <?php echo $account->getError(Constants::$passwordsDontMatch) ?>
                    <input type="password" name="password" placeholder="password" required>
                    <input type="password" name="confirmPassword" placeholder="confirmPassword" required>
                    <input type="submit" name="submitButton" value="SUBMIT">
                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
                
            </div>
        </div>


    </body>
</html>