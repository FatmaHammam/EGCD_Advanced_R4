<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form </title>
</head>
<body>
    <form action="{{ route('receivedata')}}" method="post">
        @csrf
        <input type="text" name="fullName">
        <input type="submit">
    </form>
</body>
</html>

