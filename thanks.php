<?php

if($_SERVER["REQUEST_METHOD"] === "POST" ){ 

    if(isset($_POST['firstName']) && trim($_POST['firstName']) === '') {
        $errors[] = "The first name is required";
    }

    if(isset($_POST['lastName']) && trim($_POST['lastName']) === '') {
        $errors[] = "The last name is required";
    }

    if(isset($_POST['email']) && trim($_POST['email']) === '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false) {
        $errors[] = "Mail is required";
    }

    if(isset($_POST['phone']) && $_POST['phone'] === '') {
        $errors[] = "Phone is required";
    }

    if(isset($_POST['subject']) && trim($_POST['subject']) === '') {
        $errors[] = "Subject is required";
    }

    if(isset($_POST['message']) && trim($_POST['message']) === '') {
        $errors[] = "Message is required";
    }

    if (!empty($errors)) {
        require 'error.php';
        die();
    }

}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thank You</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <h1>Your message has been sent!</h1>
            <img src="images/received-message-received.gif" alt="message received">
        </header>
        <main>
            <div class="summary">
                <ul>
                    <p>Thank you <?php echo htmlentities($_POST["firstName"]); ?> <?php echo htmlentities($_POST["lastName"]); ?> for contacting us regarding <?php echo htmlentities($_POST["subject"]); ?> . </p>
                    <p>Someone from us will contact you using your e-mail <?php echo htmlentities($_POST["email"]); ?> or by calling you using your number <?php echo htmlentities($_POST["phone"]); ?> in the most brief delay concerning your message: <?php echo htmlentities($_POST["message"]); ?> . </p>
                </ul>
            </div>
            <p>
                <a href="form.php">Back to contact form</a>
            </p>
        </main>
    </body>

</html>