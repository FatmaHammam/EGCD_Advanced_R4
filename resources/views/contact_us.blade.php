<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('home') }}" >
        @csrf
        <input type="text" name="fname">
        <input type="submit">
    </form>

    <a href="{{route('home')}}" >Home</a>  
    <a href="{{route('about')}}" >About Us</a>
</body>
</html>