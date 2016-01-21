<?php
$footerClass = "stick-bottom";
$backOnePage = (isset($_SERVER['HTTP_REFERER']))? htmlspecialchars($_SERVER['HTTP_REFERER']):"#";
$pageTemplate = include_once 'views/404.php';


return $pageTemplate;
