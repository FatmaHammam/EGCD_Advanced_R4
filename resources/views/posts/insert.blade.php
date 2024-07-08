@extends('layouts.app')
@section('title','Add new Post')
@section('content')
<div class="container">
<div class="row">
      <div class="col-md-10">
          <h3 class="h1 text-center"> Add New Post </h3><hr>
          <form  action="{{route('postStore')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group row">
              <label for="text" class="col-12 col-form-label">Enter Title here</label> 
              <div class="col-12">
                <input id="text" name="title" placeholder="Enter Title here" class="form-control here" required="required" type="text">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="textarea" class="col-12 col-form-label">Enter Content</label> 
              <div class="col-12">
                <textarea id="textarea" name="content" cols="40" rows="12" class="form-control"></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <label for="file" class="col-12 col-form-label">Select image</label> 
              <div class="col-12">
                <input id="file" name="image" class="form-control " type="file">
              </div>
            </div>
            <div class="form-group">
          <input type="submit"  style=" padding: 5px 30px; background-color:#001a33; color:lightblue" name="Add" value="POST">
        </div>
          </form>
        </div>
  </div>
</div>
  @endsection