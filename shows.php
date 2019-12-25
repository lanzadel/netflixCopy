<?php
require_once ("includes/header.php");

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createTvShowPreview();

$category = new CategoryContainers($con, $userLoggedIn);
echo $category->showTvShowCategories();

?>