# Contact-Form-With-Email-using-PHPMailer

This project provides a basic contact form implementation in PHP, allowing users to submit their contact information. The form is designed to send an email using PHPMailer to a specified recipient, including the user's details upon submission.

## Features

- **Contact Form:**
  - Users can submit their contact information through a simple and user-friendly form.

- **Email Notification:**
  - PHPMailer is utilized to send an email to a specified recipient with the user's details.

## Technologies Used

- **PHP:** The project is implemented using PHP for server-side processing.

- **PHPMailer:** Integrated PHPMailer for sending emails securely and efficiently.

## Getting Started

To get started with the project, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/php-contact-form.git
   ```

2. Configure the PHPMailer settings:
   - Open the `send_email.php` file and update the SMTP server, username, password, and other settings.

3. Upload the project to your web server.

4. Open the contact form in your web browser and submit your contact information.

## PHPMailer Configuration

To enable email sending functionality, you'll need to configure PHPMailer with your SMTP server details. Follow these steps:

1. Obtain SMTP server details from your email provider.

2. Open the `send_email.php` file in a text editor.

3. Update the following PHPMailer settings with your SMTP details:

   ```php
   $mail->isSMTP();
   $mail->Host = 'your-smtp-server.com';
   $mail->SMTPAuth = true;
   $mail->Username = 'your-smtp-username';
   $mail->Password = 'your-smtp-password';
   $mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' based on your server configuration
   $mail->Port = 587; // Update the port accordingly
   ```

4. Save the changes.

   ## Demo

## Contact Form

![App Screenshot](https://github.com/devgeek2700/Contact-Form-With-Email-using-PHP/blob/master/1.jpg?raw=true)

## Thank You Note

![App Screenshot](https://github.com/devgeek2700/Contact-Form-With-Email-using-PHP/blob/master/2.png?raw=true)

## Sent Mail

![App Screenshot](https://github.com/devgeek2700/Contact-Form-With-Email-using-PHP/blob/master/3.png?raw=true)

## Contributing

If you'd like to contribute to the project, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the [MIT License](LICENSE.md).

Feel free to use this simple PHP contact form implementation with PHPMailer for your projects. If you have any questions or feedback, please reach out to us.

