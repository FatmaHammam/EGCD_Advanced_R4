<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('upload.photo') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="photo">
        <button type="submit">Upload Photo</button>
    </form>

</body>

</html>