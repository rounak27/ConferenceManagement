<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify Your Email</title>
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            text-align: center;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-resend {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }
        .btn-resend:hover {
            background-color: #0056b3;
        }
        .alert {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card">
        <img src="{{asset('images/nepasLogo.svg')}}" alt="Verification Icon" class="mb-3">
        <h3>Email Verification Required</h3>
        <p>Before proceeding, please check your email for a verification link.</p>
        <p>If you did not receive the email, click below:</p>

        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-resend">Resend Verification Email</button>
        </form>
        <p class="mt-3">Already verified? <a href="{{url('login')}}" class="">Login</a></p>   
    </div>
</div>

</body>
</html>
