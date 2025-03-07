<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Abstract Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #777;
        }
        .button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Abstract Submission</h2>

        <p>Dear Verifier,</p>

        <p>A new abstract has been submitted for verification fro NEPCON-2025. Below are the details:</p>

        <strong>Submitted By:</strong> {{ $userData->FName }} {{ $userData->LName }} ({{ $userData->email }}) <br>
        <strong>Submitted On:</strong> {{ now()->format('d M, Y') }} <br>
        
        <p>Please review and verify the abstract as soon as possible.</p>

        <a href="{{ route('admin.login') }}" class="button">Review Abstract</a> 

        <p class="footer">Thank you,<br>Abstract Submission Team</p>
    </div>
</body>
</html>
