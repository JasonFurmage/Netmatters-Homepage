<?php

require_once realpath(__DIR__ . "/../vendor/autoload.php");
use Dotenv\Dotenv;$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$dbHost = $_ENV['MySQL_DB_HOST'];
$dbUserName = $_ENV['MySQL_DB_USER_NAME'];
$dbPassword = $_ENV['MySQL_DB_PASSWORD'];
$dbName = $_ENV['MySQL_DB_NAME'];

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUserName", "$dbPassword");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
   echo "Unable to connect";
   echo $e->getMessage();
   exit; 
}

//echo "Connected to the database";

try {
    $results = $db->query("SELECT * FROM news");
    //echo "Retrieved results";
} catch (Exception $e) {
    echo "Query failed";
    echo $e->getMessage();
}

$news = $results->fetchAll(PDO::FETCH_ASSOC);