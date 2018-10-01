<?php
$menu = array(
    'Post'  => array('text'=>'Post',  'url'=>'Post.php' ),
    'Thread'  => array('text'=>'Message Board',  'url'=>'thread.php')
);

return generateMenu($menu,$controller);

?>

<?php
function generateMenu($items,$controller,$active_page) {

    $orinentation="vertical"; //intializes orientation variables.
    $ulOrt="ulV";
    $li_Ort="liV";
    $float_right="Menu";

    if ($active_page=="index"){
        $active_page="Home";
    }
    switch ($controller) { //determines

        case 1:$orinentation="horizontal";
            $ulOrt="ulH";
            $li_Ort="liH";
            break;
        case 2:
            $orinentation="vertical";
            $ulOrt="ulV";
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
    $html = "<nav class= $orinentation><ul class= $ulOrt>\n";
    foreach($items as $item) {

        if (current($item)==$float_right & $orinentation=="horizontal"){ //sets up a an item in the right hand corner in horizontal situations.
            $html .= "<li class=$li_Ort style='float: right'><a href='{$item['url']}'>{$item['text']}</a></li>\n";
        }
        else if (current($item)== $active_page){ //detects the active page
            $html .= "<li class=$li_Ort><a class='active' href='{$item['url']}'>{$item['text']}</a></li>\n";
        }

        else{
            $html .= "<li class=$li_Ort><a href='{$item['url']}'>{$item['text']}</a></li>\n";

        }

    }
    $html .= "</ul></nav>\n";

    return $html;
}
