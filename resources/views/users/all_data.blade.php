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
            <th>Update</th>
            <th>Show</th>
        </tr>

        @foreach ($customers as $row)
            <tr>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>
                <a href="/editCust/{{$row->id}}">Update
                </a></td>
                <td>
                    <a href="/showCust/{{$row->id}}">Show
                    </a>
                </td>
               
                <td>
                    <form action="{{ route('deleteCust') }}" method="post">
                        @csrf
                        @method('DELETE')
                         <input type="hidden" name="id" value="{{ $row->id }}">
                         <input type="submit" value="delete">
                    </form> 
                </td>
                
                    
            </tr>
        @endforeach
    </table>

    <form action="{{ route('showDeleted') }}" method="get">
        @csrf
        <input type="submit" value="Show Deleted">
    </form>
</body>
</html>