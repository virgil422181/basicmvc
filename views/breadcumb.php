<?php

$breadcrumb = "<ul class='breadcrumb'>";
$breadcrumb .= "<li><a href='".WEB_ROOT."'>Acasa</a></li>";
if (isset($_GET['tip'])){
    $breadcrumb .= "<li><a href='".WEB_ROOT.$_GET['tip']."'>".ucfirst($_GET['tip'])."</a></li>";
}
if (isset($_GET['model'])){
    $breadcrumb .= "<li><a href='".WEB_ROOT.$_GET['tip']."/".$_GET['model']."'>";
    $breadcrumb .= niceTitle($_GET['model']) ;
    $breadcrumb .="</a></li>";
}
if (isset($_GET['id'])){
    $breadcrumb .= "<li><a href='".WEB_ROOT.$_GET['tip'].$_GET['model'].$_GET['id']."'>".ucfirst($_GET['id'])."</a></li>";
}
$breadcrumb .= "</ul>";

return $breadcrumb;