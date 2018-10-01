<?php
include('array.php');
$help_page = array(
    'FAQ'  => array('text'=>'FAQ',  'url'=>'Menu.php'),
    'Contact'  => array('text'=>'Contact Us',  'url'=>'index.php'),
    'Report'  => array('text'=>'Report Error',  'url'=>'?p=away'),
);



//necessary components do not remove
$page_title = 'Help';
$controller = 1; //controls oreintation of menu
$active_page= basename(__FILE__,'.php');//sends a page identifier to the menu funciton


?>
<?php include('single.php'); ?>
<ul class="ulS">
    <?php foreach ($faq as $question => $item){?>
    <li class="liS"><a href="FAQ.php?item=<?php echo $question;?>"><?php echo $item["title"];?></a></li>
   <?php } ?>
</ul>
