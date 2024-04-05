<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $additionalField1 = $_POST["additionalField1"];
    $additionalField2 = $_POST["additionalField2"];
    $message = $_POST["message"];
    $formData = "Name: $name\nEmail: $email\nAdditional Field 1: $additionalField1\nAdditional Field 2: $additionalField2\nMessage: $message\n";
    file_put_contents("form_data.txt", $formData, FILE_APPEND);
    header("Location: your_form_page.html"); 
    exit;
} else {
    header("Location: your_form_page.html"); 
    exit;
}
?>
