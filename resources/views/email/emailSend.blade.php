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
<div class="col-12 grid-margin">
    <div class="abstract-card"> 
         <div class="abstract-title">{{$abstract->TopicTitle}}</div>
        <br>
        <div class="submitted-date">Submitted on: <strong>{{$abstract->created_at->format('F d, Y')}}</strong></div>
        <br>
        <div class="submitted-date">Submitted By: <strong>{{$abstract->UserName}}</strong>({{$abstract->UserEmail}})</div>
        <br>
        <div class="abstract-content">
            {!! $abstract->AbstractContent !!}
        </div>
        <div class="submitted-date">
        Status:
        <span class="badge badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span>
        </div> 
  <!-- @echo(      "THis is test"); -->
    </div>
</div>
</body>
</html>