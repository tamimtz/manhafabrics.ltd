<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us Message</h1>
    <p>Name : {{ $details['name']}}</p>
    <p>Email : {{ $details['email']}}</p>
    <p>Phone : {{ $details['phone']}}</p>
    <p>Message : {{ $details['msg']}}</p>
</body>
</html>