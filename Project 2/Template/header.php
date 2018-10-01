<?php require('functions.php');?>
<html>
    <title><?php echo $page_title;?></title>



    <div class="w3-container  w3-indigo ">
<header>
    <link rel="stylesheet" type="text/css" href="Template/stylesheet.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <h1>Bowling Buddies</h1>
</header>

<nav>
    <?php echo generateMenu($menu,$controller,$active_page); ?>
</nav>
   </div>
<h1><?php echo $page_title ?></h1>

</html>