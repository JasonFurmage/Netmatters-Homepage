<?php

include("inc/connection.php");

// Get offices data from database as associative array.
try {
    $results = $db->query("SELECT * FROM offices");
    $offices = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Unable to retrieve offices data:";
    //echo $e->getMessage();
}

?>
