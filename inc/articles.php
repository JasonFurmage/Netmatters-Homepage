<?php

include("inc/connection.php");

try {
    $results = $db->query("SELECT * FROM news");
    $articles = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Unable to retrieve latest news articles: " . $e->getMessage();
}

?>
