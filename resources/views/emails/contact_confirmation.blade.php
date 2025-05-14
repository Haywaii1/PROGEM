<!DOCTYPE html>
<html>
<head>
    <title>Contact Confirmation</title>
</head>
<body>
    <h2>Hello {{ $data['name'] }},</h2>
    <p>Thank you for reaching out to PROGEMHUB!</p>
    <p>We have received your message and will respond shortly.</p>

    <p><strong>Your Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <p>Best regards,<br>PROGEMHUB Team</p>
</body>
</html>
