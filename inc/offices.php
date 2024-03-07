<?php

include("inc/connection.php");

try {
    $results = $db->query("SELECT * FROM offices");
    $offices = $results->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo "Unable to retrieve office addresses: " . $e->getMessage();
}

?>
