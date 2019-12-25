<?php
require_once ("includes/header.php");

if(!isset($_GET["id"])) {
    ErrorMessage::show("No id was given to this page");
}

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createCategoryPreview($_GET["id"]);

$category = new CategoryContainers($con, $userLoggedIn);
echo $category->showCategory($_GET["id"]);

?>