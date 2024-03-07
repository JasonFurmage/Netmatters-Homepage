<?php

include("inc/connection.php");
include("inc/functions.php");

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $noErrors = true;

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $marketing = $_POST['marketing'] ?? "off";

    if (empty($name)) {
        $errors[] = "The name field is required.";
    }

    if (empty($email)) {
        $errors[] = "The email field is required.";
    }

    if (empty($telephone)) {
        $errors[] = "The telephone field is required.";
        
    } else if (!isValidTelephone($telephone)) {
        $errors[] = "The telephone format is incorrect.";
    }

    if (empty($message)) {
        $errors[] = "The message field is required.";
    }

    $noErrors = count($errors) === 0;

    if ($noErrors) {
        $sql = 'INSERT INTO enquiries (name, company, email, telephone, message, marketing) VALUES (?, ?, ?, ?, ?, ?)'; 

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $name, PDO::PARAM_STR);
        $results->bindValue(2, $company, PDO::PARAM_STR);
        $results->bindValue(3, $email, PDO::PARAM_STR);
        $results->bindValue(4, $telephone, PDO::PARAM_STR);
        $results->bindValue(5, $message, PDO::PARAM_STR);
        $results->bindValue(6, $marketing, PDO::PARAM_STR);
        $results->execute();
        
    } catch (Exception $e) {
        echo "Unable to submit enquiry: " . $e->getMessage();
        $errors[] = "There was an error submitting your enquiry.";
    }

    }

    if ($noErrors) {
        $name = $company = $email = $telephone = $message = $marketing = null;
    }
}

?>
