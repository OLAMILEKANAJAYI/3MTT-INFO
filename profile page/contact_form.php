<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post data
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Here, you would typically do something with the data, like sending an email or storing it in a database
    // For demonstration, we'll just echo the data back
    echo "Thank you, $name. We received your message: $message";
    // In real application, redirect or inform the user of success
} else {
    // Not a POST request, redirect to form or display an error
    echo "Error: Form not submitted correctly.";
}
?>
