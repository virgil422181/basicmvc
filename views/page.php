<?php 
/* @var $pageData Page_Data */
return "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>$pageData->title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!-- Meta tags -->
        $pageData->metaDesc
        $pageData->metaAuth
        $pageData->metaKey
        <!-- Favicon -->
        $pageData->favicon
        <!-- Styles -->
        $pageData->css
        <!-- Java scrips and libraries -->
        $pageData->js
    </head>
    <body>
    <div class='site-wrapper'>
        $pageData->content
    </div>
    </body>
</html>";