<!DOCTYPE html>
<html>
<head>
    <title>Verify Your Email</title>
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.css') }}">


</head>
<body>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<p>Before proceeding, please check your email for a verification link.</p>
<p>If you did not receive the email, click below:</p>

<form method="POST" action="{{ route('verification.resend') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Resend Verification Email</button>
</form>
</body>
</html>
