<?php
include('array.php');
 if (isset($_GET['item'])) {
     $facts = $_GET['item'];//converts the item sent to an objects
     $info = $about[$facts];//searches for the get item in the array
 }


$controller = 1; //controls oreintation of menu
?>

<?php include('single.php');?>

<title><?php echo $info["title"];?></title>
<h1 class><?php echo $info["title"];?></h1>

<article class="floatingTemplate">
<p><?php echo $info["body"];?></p>
</article>    

<aside>
    <ul class="ulS">
        <?php foreach ($about as $question => $item){?>
            <li class="liS"><a href="AboutInfo.php?item=<?php echo $question;?>"><?php echo $item["title"];?></a></li>
        <?php } ?>
    </ul>
</aside>





