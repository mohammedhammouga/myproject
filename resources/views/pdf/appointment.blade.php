<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .details {
            margin-bottom: 20px;
        }
        .details strong {
            display: inline-block;
            width: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Appointment Details</h1>
        </div>
        <div class="details">
            <p><strong>Name:</strong> {{ $name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>Time:</strong> {{ $time }} h</p>
            <p><strong>Message:</strong> {{ $message }}</p>
        </div>
    </div>
</body>
</html>
