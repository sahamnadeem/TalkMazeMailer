<!doctype html>
<html lang="`en`">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <img src="{{ asset('images/logo.png') }}" width="200px">
    <br/>
    <br/>
    <section style="padding-left: 20px; padding-right: 20px;">
        Dear {{ $name }}! <br/><br/>
        {{ $content }}
    </section>
    <br/>
    <br/>
    <br/>
    Regards!
    <a href="https://talkmaze.com">TalkMaze.com </a>&copy;
</body>
</html>
