<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access the form fields via $_POST superglobal
    $name = $_POST['name'];

    // Perform any necessary processing or validation on the form data
    // ...

    // Return a response
    $response = 'Form submitted successfully!';
    echo $response;
}
?>