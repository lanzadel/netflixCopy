<?php

    require_once ("includes/config.php");
    require_once ("includes/classes/FormSanitizer.php");
    require_once ("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST['submitButton'])) {
        $username = FormSanitizer::sanitizeFormUsername($_POST['username']);
        $password = FormSanitizer::sanitizeFormPassword($_POST['password']);

        $success = $account->login($username, $password);
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
