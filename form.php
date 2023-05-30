<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <form action="thanks.php" method="post">
            <div>
                <label for="firstName">First Name : </label>
                <input type="text" id="firstName" name="firstName">
            </div>
            <div>
                <label for="lastName">Last Name : </label>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="phone">Phone nb. :</label>
                <input type="phone" id="phone" name="phone">
            </div>
            <div>
                <label for="subject">Subject: </label>
                <select id="subject" name="subject">
                    <option value="">Choose an option</option>
                    <option value="Sales">Sales</option>
                    <option value="Support">Support</option>
                    <option value="Logistics">Logistics</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea id="message" name="message"></textarea>
            </div>
            <div  class="button">
                <button  type="submit">Envoyer votre message</button>
            </div>
        </form>
    </main>
</body>

</html>

<?php

?>

