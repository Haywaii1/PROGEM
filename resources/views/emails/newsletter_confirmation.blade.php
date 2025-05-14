<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .email-container {
            background: white;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .header {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            Hello {{ $data['email'] }},
        </div>

        <p>Thank you for subscribing to our newsletter at <strong>ProGemHub</strong>! 🎉</p>

        <p>You’ll be the first to hear about new updates, blog posts, and exclusive offers.</p>

        <p>If you did not subscribe, please disregard this email.</p>

        <div class="footer">
            &copy; {{ date('Y') }} The ProGemHub Team. All rights reserved.
        </div>
    </div>
</body>
</html>
