<?php
// success_page.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sent Successfully</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 50px;
        }

        .success-message {
            color: green;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .back-to-home {
            display: block;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
            margin-top: 10px;
        }

        .back-to-home:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="success-message">
        Email sent successfully! Thank you.
    </div>

    <!-- Include a link to go back to the homepage -->
    <a href="index.php" class="back-to-home">Go back to homepage</a>
</body>

</html>