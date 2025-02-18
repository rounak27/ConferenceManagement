<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Email Verified | Star Admin</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        /* Centering the verification box */
        .verification-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #667eea, #764ba2);
        }
        .verification-box {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .brand-logo img {
            width: 150px;
            margin-bottom: 20px;
        }
        h4 {
            font-size: 22px;
            color: #333;
            font-weight: bold;
        }
        .btn-custom {
            background: #667eea;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 6px;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #556cd6;
        }
    </style>
</head>
<body>

    <div class="verification-container">
        <div class="verification-box">
            <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
            </div>

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <h4>Email Verified Successfully 🎉</h4>
            <p>Your email has been verified successfully. Click below to log in to your account.</p>
            
            <a href="{{ url('login') }}" class="btn btn-custom">Login</a>
        </div>
    </div>

    <!-- Scripts -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
</body>
</html>
