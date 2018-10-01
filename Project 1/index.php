<?php



//necessary components DO NOT REMOVE
$page_title = 'Home';
$controller = 1; //controls oreintation of menu horizontal(1),verticle(2),sidebar(3)
$active_page= basename(__FILE__,'.php');//detects the active page name
?>
<?php include('Single.php'); ?>
<a href="Post.php">Post</a>
<a href="thread.php">Thread</a>