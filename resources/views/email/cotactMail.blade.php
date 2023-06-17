<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="datalisviewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h2>Hello Admin,</h2><br>
    You received an email from : {{ $name }}<br>
    Here are the details:<br>
    <b>Name:</b> {{ $name }}<br>
    <b>Email:</b> {{ $email }}<br>
    <b>Phone Number:</b> {{ $telephone }}<br>
    <b>Site Web:</b> {{ $site_web }}<br>
    <b>Message:</b> {{ $user_message }}<br>
    Thank You
</body>
</html>