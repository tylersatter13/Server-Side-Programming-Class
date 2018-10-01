<?php

    $article1 = "Welcome to our website we are glad you are here! Please enjoy my site. If you have any questions visit the help page";
    $article2 = "Hours:<li>Monday 8:00-5:00pm</li> <li>Tuesday 8:00am-5:00pm</li><li>Wedensday 8:00am-5:00pm</li><li>Thursday 8:00am-5:00pm</li>
                    <li>Friday 8:00am-5:00pm</li><li>Saturday 9:00am-7:00pm</li><li>Saturday 9:00am-7:00pm</li>";

    $articles = array( $article1,$article2);// for addition article add to the array

//necessary components DO NOT REMOVE
    $page_title = 'Home';
    $controller = 1; //controls oreintation of menu horizontal(1),verticle(2),sidebar(3)
    $active_page= basename(__FILE__,'.php');//detects the active page name
?>
<?php include('single.php'); ?> 

