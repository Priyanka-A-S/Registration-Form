<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - Success</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Registration Successful</h1>
    </header>

    <section class="response-section" style="display: block;">
        <h2>Thank you for registering!</h2>
        <p><strong>First Name:</strong> <?php echo $firstName; ?></p>
        <p><strong>Last Name:</strong> <?php echo $lastName; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
    </section>

    <footer>
        <p><a href="index.html">Back to Form</a></p>
    </footer>
</body>
</html>
