@extends('master')

@section('title','About Page')

@section('content')
<h3>About Page</h3>
<p>
    Instead of defining all of your request handling logic as closures in your route files,<br> you may wish to organize this behavior using "controller" classes. Controllers can group related request handling logic into a single class.<br> For example, a UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users.<br> By default, controllers are stored in the app/Http/Controllers directory.
</p>
@endsection