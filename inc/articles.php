<?php

include("inc/connection.php");

// Get latest news articles from database as associative array.
try {
    $results = $db->query("SELECT * FROM news");
    $articles = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Unable to retrieve latest news data:";
    //echo $e->getMessage();
}

?>
