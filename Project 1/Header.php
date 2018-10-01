<?php include('Functions.php')?>
<html>
<header>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <title><?php echo $page_title ?></title>
</header>
<nav>
    <?php generateMenu($menu,$controller);?>
</nav>
<h1><?php echo $page_title ?></h1>
</html>