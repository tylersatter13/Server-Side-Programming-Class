<?php
$menu = array(
    'menu'  => array('text'=>'Login',  'url'=>'Menu.php'),
    'home'  => array('text'=>'Home',  'url'=>'index.php'),
    'about'  => array('text'=>'About',  'url'=>'About.php'),
    'help' => array('text'=>'Help', 'url'=>'Help.php'),
);

return generateMenu($menu,$controller);

?>

<?php
function generateMenu($items,$controller,$active_page) {

    $orinentation="vertical"; //intializes orientation variables.
    $ulOrt="ulV";
    $li_Ort="liV";
    $float_right="Login";

    if ($active_page=="index"){
        $active_page="Home";
    }
    switch ($controller) { //determines 

        case 1:$orinentation="horizontal";
            $ulOrt='w3-navbar w3-green w3-large';
            $li_Ort="liH";
            break;
        case 2:
            $orinentation="vertical";
            $ulOrt='';
            $li_Ort="liV";

            break;
        case 3:
            $orinentation="sidebar_Menu";
            $ulOrt="ulS";
            $li_Ort="liS";

        default:
            break;
    }

    /*if($orinentation =="sidebar_Menu"){
        echo "A";
    }*/
    $html = "<nav class=><ul class='w3-navbar w3-xlarge'>\n";
    foreach($items as $item) {

        if (current($item)==$float_right & $orinentation=="horizontal"){ //sets up a an item in the right hand corner in horizontal situations.
            $html .= "<li class=$li_Ort style='float: right'><a href='{$item['url']}'>{$item['text']}</a></li>\n";
        }
        else if (current($item)== $active_page){ //detects the active page
            $html .= "<li class=$li_Ort><a class='w3-blue' href='{$item['url']}'>{$item['text']}</a></li>\n";
        }

        else{
            $html .= "<li class=$li_Ort><a href='{$item['url']}'>{$item['text']}</a></li>\n";

        }

    }
    $html .= "</ul></nav>\n";

    return $html;
}

?>
<?php function createArticle($articles){
    $articlesLength =count($articles);

    for($x =0; $x < $articlesLength; $x++){
        echo "<article>$articles[$x]</article>";
    }
}
?>