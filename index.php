<?php
require_once ("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createPreviewVideo(null);
$category = new CategoryContainers($con, $userLoggedIn);
echo $category->showAllCategories();

?>