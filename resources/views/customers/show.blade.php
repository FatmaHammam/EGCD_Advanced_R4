<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Customer data</title>
</head>
<body>
   <h3>Welcome {{$customer->name}}</h3>
   <h4>Your Email is: {{$customer->email}}</h4>
</body>
</html>