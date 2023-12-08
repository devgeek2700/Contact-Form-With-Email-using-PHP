<?php require("script.php"); ?>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['senderName']) || empty($_POST['senderEmail']) || empty($_POST['subject']) || empty($_POST['message'])) {
        $response = "All fields are required";
    } else {
        $response = sendMail($_POST['senderName'], $_POST['senderEmail'], $_POST['subject'], $_POST['message']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Send Email in PHP using PHPMailer and Gmail</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post" enctype="multipart/form-data">
                <div class="info">
                    Send an email to yourself
                </div>

                <label>Enter your name</label>
                <input type="text" name="senderName"
                    value="<?php echo isset($_POST['senderName']) ? $_POST['senderName'] : ''; ?>">

                <label>Enter your email</label>
                <input type="email" name="senderEmail"
                    value="<?php echo isset($_POST['senderEmail']) ? $_POST['senderEmail'] : ''; ?>">

                <label>Enter a subject</label>
                <input type="text" name="subject"
                    value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>">

                <label>Enter your message</label>
                <textarea name="message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>

                <button type="submit" name="submit">Submit</button>

                <?php
                if (!empty($response) && $response != "success") {
                ?>
                <p class="error"><?php echo @$response; ?></p>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>