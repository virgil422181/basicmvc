<?php

// Include website configuration
include_once 'config/config.php';
// Include database connection
include_once 'config/dbConnection.php';
// Include required models
include_once 'models/Page_Data.class.php';

// Initialize front end controller object for page display - class Page_Data
$pageData = new Page_Data;

// Load controller if exists from the get url value or load 404 error
/* verify if tip controllers exists and load controller */
if (isset($_GET['tip'])) {
    $tipPage = $_GET['tip'];
    $page="controllers/".$tipPage.".php";
    if (file_exists($page)) {
        $pageFile = $page;
    } else {
        $pageFile = "controllers/404.php";
        $footerFix = "footer-fixed";
    }
    // set the $adminPage variable if is callng the admin page
    if ($tipPage === "admin") {
        $adminPage = "Yes";
    }
} else {
    $pageFile = "controllers/index.php";
}

$breadcrumb = include_once("views/breadcumb.php");
// Load CSS files


// Load diferent content for admin page
if (isset($adminPage)){
    // Admin Page Content
    $pageData->addCss("//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css");
    $pageData->addCss("//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css");
    $pageData->addCss("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
    $pageData->addCss("//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css");
    $pageData->addCss("//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css");
    $pageData->addCss(WEB_ROOT."lib/datatables/dataTables.responsive.css");
    $pageData->addCss(WEB_ROOT."css/admin.css");

    /* Add Javascripts and jquery libraries */
    $pageData->addJs("//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js");
    $pageData->addJs("//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js");
    $pageData->addJs(WEB_ROOT."lib/metisMenu.min.js");
    $pageData->addJs("//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js");
    $pageData->addJs("//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js");
    $pageData->addJs(WEB_ROOT."lib/datatables/dataTables.responsive.js");
    $pageData->addJs(WEB_ROOT."lib/validator.js");
    $pageData->addJs(WEB_ROOT."lib/ckeditor/ckeditor.js");
    $pageData->addJs(WEB_ROOT."lib/ckeditor/adapters/jquery.js");
    $pageData->addJs(WEB_ROOT."js/admin.js");

    $pageData->content = include_once ($pageFile);

} else {
    $pageData->addCss("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css");
    $pageData->addCss("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css");
    $pageData->addCss("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css");
    $pageData->addCss("//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
    $pageData->addCss(WEB_ROOT."lib/colorbox/colorbox.css");
    $pageData->addCss("//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css");
    $pageData->addCss("//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css");
    $pageData->addCss(WEB_ROOT."lib/datatables/dataTables.responsive.css");
    $pageData->addCss(WEB_ROOT."css/style.css");

    // Load JS files
    $pageData->addJs("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js");
    $pageData->addJs("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js");
    $pageData->addJs("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js");
    $pageData->addJs(WEB_ROOT."lib/unveil-master/jquery.unveil.js");
    $pageData->addJs(WEB_ROOT."lib/colorbox/jquery.colorbox-min.js");
    $pageData->addJs(WEB_ROOT."lib/metisMenu.min.js");
    $pageData->addJs("//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js");
    $pageData->addJs("//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js");
    $pageData->addJs(WEB_ROOT."lib/datatables/dataTables.responsive.js");
    $pageData->addJs(WEB_ROOT."lib/validator.js");
    $pageData->addJs(WEB_ROOT."js/main.js");

    // Load page default content

    $pageData->content .= include_once ($pageFile);


    $descriere = (isset($descriere))? $descriere : "Formulare de contact clienti";
    $author = (isset($author))? $author : "Virgil Mihai";
    $keywords = (isset($keywords))? $keywords : array();

}
// Ser the page title pattern
$pageData->title .= ($pageData->title==="")? "Feedback clienti - Mobel Auto" : " - Mobel Auto";
if (isset($descriere)) {
    $pageData->metaDescription($descriere);
}
if (isset($author)) {
    $pageData->metaAuthor($author);
}
if (isset($keywords) && is_array($keywords)) {
    $pageData->metaKeyword($keywords);
}

// Load the template file
$pageTemplate = include_once 'views/page.php';

echo $pageTemplate;
