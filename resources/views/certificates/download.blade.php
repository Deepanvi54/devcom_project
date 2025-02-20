<!DOCTYPE html>
<html>
<head>
    <title>Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .certificate-container {
            text-align: center;
            margin-top: 50px;
            border: 1px solid #ccc;
            padding: 30px;
        }
        .certificate-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .certificate-details {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="certificate-container">
    <div class="certificate-title">
        Certificate of Completion
    </div>
    <div class="certificate-details">
        <p>This is to certify that</p>
        <p><strong>{{ $certificate->user->name }}</strong></p>
        <p>has successfully completed the challenge:</p>
        <p><strong>{{ $certificate->challenge->title }}</strong></p>
        <p>Issued on: {{ $certificate->issued_at->format('d M Y') }}</p>
    </div>
</div>
</body>
</html>
