<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            background: white;
            padding: 20px;
            margin: 40px auto;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        .btn-verify {
            background-color: #28a745;
            color: white;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }
        .btn-verify:hover {
            background-color: #218838;
        }
        .footer {
            font-size: 14px;
            color: #6c757d;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('images/nepaslogoSmall.png')}}" alt="Nepas Conference Logo" class="logo">
        <h2>Welcome, {{ $user->FName }} {{ $user->LName }}!</h2>
        <p>Thank you for registering at <strong>Nepas Conference</strong>. Please verify your email by clicking the button below:</p>

        <p>
            <a href="{{ $verificationUrl }}" class="btn-verify">Verify Email</a>
        </p>

        <p>If you did not create an account, no further action is required.</p>

        <div class="footer">
            <p>Regards,</p>
            <strong>Nepas Conference Team</strong>
        </div>
    </div>
</body>
</html>
