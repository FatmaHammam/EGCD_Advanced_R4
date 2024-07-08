@extends('layouts.app')
@section('title','Add new BloG')
@section('content')
<div class="row">
  <div class="col-md-10">
      <h3 class="h1 text-center"> Add New Blog </h3><hr>
      <form  action="/update/{{$post->id}}" method="POST" enctype="multipart/form-data" >
            @csrf
    	<div class="form-group row">
            <label for="text" class="col-12 col-form-label">Enter Title here</label> 
            <div class="col-12">
              <input id="text" name="title" placeholder="Enter Title here" class="form-control here" required="required" type="text" value="{{$post->title}}">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="textarea" class="col-12 col-form-label">Enter Content</label> 
            <div class="col-12">
              <textarea id="textarea" name="content" cols="40" rows="12" class="form-control">{{$post->content}}</textarea>
            </div>
          </div> 

          <div class="form-group row">
            <label for="image" class="col-12 col-form-label">Choose image</label> 
            <div class="col-12">
              <input id="image" name="image" class="form-control here" type="file" value="{{$post->image}}">
            </div>
          </div>

          <div class="form-group">
        	<input type="submit"  style=" padding: 5px 30px; background-color:#001a33; color:lightblue" name="Update" value="UPDATE">
      	  </div>
    </form>
</div>
</div>
@endsection