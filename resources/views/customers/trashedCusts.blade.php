<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Customers data</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Restore</th>
            
        </tr>

        @foreach ($customers as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                
                <td>
                 <form action="{{ route('restore') }}" method="post">
                     @csrf
                     <input type="hidden" name="id" value="{{ $row->id }}">
                     <input type="submit" value="Restore">
                     </form>
                 </td>     
            </tr>
        @endforeach
    </table>

</body>
</html>