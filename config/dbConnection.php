<?php

// definirea constantei DB_NAME
defined('DB_NAME') ? NULL : define ('DB_NAME', 'feedback');

$dbInfo = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;
try {
    // try to connect to a database with a PDO object
    $db = new PDO($dbInfo, DB_USER, DB_PASS);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION ); 
    
} catch (Exception $ex) {
    // if connection failed
    $pageData->messages = "<h1>Connection Failed</h1><p>$ex</p>";    
}
