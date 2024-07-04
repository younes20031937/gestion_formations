<!DOCTYPE html>
<html>
<head>
    <title>{{ $mailSubject }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #007bff;
            color: #ffffff;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .info-box {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .info-title {
            font-weight: bold;
            color: #007bff;
        }
        .info-content {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Contact Form Submission - OFPPT</h1>
        </div>
        <div class="info-box">
            <div class="info-content">
                <span class="info-title">Name:</span> {{ $senderName }}
            </div>
            <div class="info-content">
                <span class="info-title">Phone:</span> {{ $senderPhone }}
            </div>
            <div class="info-content">
                <span class="info-title">Email:</span> {{ $senderEmail }}
            </div>
            <div class="info-content">
                <span class="info-title">Subject:</span> {{ $mailSubject }}
            </div>
            <div class="info-content">
                <span class="info-title">Message:</span> {{ $mailMessage }}
            </div>
        </div>
    </div>
</body>
</html>
