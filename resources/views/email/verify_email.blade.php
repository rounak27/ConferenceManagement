<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
</head>
<body>
    <h2>Hello, {{ $user->Fname }} {{ $user->Lname }}</h2>
    <p>Thank you for registering at Nepas Conference. Please verify your email by clicking the link below:</p>

    <p>
        <a href="{{ $verificationUrl }}" style="background-color: #28a745; color: white; padding: 10px 20px; text-decoration: none;">
            Verify Email
        </a>
    </p>

    <p>If you did not create an account, no further action is required.</p>
    <br>
    <p>Regards,<br><strong>Nepas Conference Team</strong></p>
</body>
</html>
