<?php
$page_title = 'Menu';
$controller = 1; //controls oreintation of menu

$active_page= basename(__FILE__,'.php');
?>
<?php include('single.php'); ?>
<?php echo generateMenu($menu,2, $active_page); ?>


