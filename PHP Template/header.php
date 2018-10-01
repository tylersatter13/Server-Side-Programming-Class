<?php require('functions.php');?>
<?php include('array.php');?>
<html>

    <header>
        <title><?php echo $page_title;?></title>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" type="text/css" href="Menu.css">
        <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    </header>
    <nav>
        <?php echo generateMenu($menu,$controller,$active_page); ?>
    </nav>
        <h1><?php echo $page_title ?></h1>

</html>