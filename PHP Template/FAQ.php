
<?php
include('array.php');
 if (isset($_GET['item'])) {
        $faqs = $_GET['item'];
       $question = $faq[$faqs]; //$faq = the faqs array

    }


$controller = 1; //controls oreintation of menu
?>

<?php include('single.php');?>
<h1><?php echo $question["title"];?></h1>

<article class="floatingTemplate">
 <p><?php echo $question["body"];?></p>
</article>

<ul class="ulS">
    <?php foreach ($faq as $question => $item){?>
        <li class="liS"><a href="FAQ.php?item=<?php echo $question;?>"><?php echo $item["title"];?></a></li>
    <?php } ?>
</ul>