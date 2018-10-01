<?php
include('array.php');

//necessary components DO NOT REMOVE
$page_title = 'About';
$controller = 1; //controls oreintation of menu
$active_page= basename(__FILE__,'.php');//detects the active page name
?>
<?php include('single.php'); ?>
<ul class="ulS">
    <?php foreach ($about as $question => $item){?>
        <li class="liS"><a href="AboutInfo.php?item=<?php echo $question;?>"><?php echo $item["title"];?></a></li>
    <?php } ?>
</ul>