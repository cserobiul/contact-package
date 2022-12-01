<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Contact us any time</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        Name: <input type="text" name="name" placeholder="e.g: robiul islam"> <br> <br>
        Email: <input type="email" name="email" placeholder="e.g: robiulislam@gmail.com"> <br> <br>
        Message: <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message"></textarea> <br> <br>
        <button type="submit">Send Mail</button>
    </form>
</body>
</html>
