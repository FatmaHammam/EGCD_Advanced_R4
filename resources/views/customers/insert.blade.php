<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store')}}" method="post">
        @csrf
        @error('name')
        {{$message}}   
       @enderror
        <label> Customer Name: </label>
        <input type="text" name="name"><br><br>
        @error('email')
            {{$message}}
        @enderror
        <label> Customer Email: </label>
        <input type="email" name="email"><br><br>
       
        <input type="submit">
    </form>
</body>
</html>