@extends('admin.layout')
@section('title','View Post')
@section('content')


<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Show Post</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Show Post</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-item" href="#">Settings 1</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <h1 class="my-4">{{$post->title}}</h1><hr/>
    <div class="card mb-4"style="font-style: oblique;">
         {{-- <img class="card-img-top" src="images/{{$post->image}}" alt="Card image cap"> --}}
        <div class="card-body">
         
          <p class="card-text text-muted">{{$post->content}}</p>
        </div>
        <div class="card-footer text-muted">
        	<b>Posted on </b>{{$post->created_at}} by
          <a href="/user/posts/{{$post->user->id}}">{{$post->user->name}}</a>
        </div>
       
	</div>
   	<hr/>
  </div>
 </div>
</div>
</div>        </div>
        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
@endsection

