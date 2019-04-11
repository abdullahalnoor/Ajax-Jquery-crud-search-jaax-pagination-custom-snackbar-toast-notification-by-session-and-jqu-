@extends('admin.master') 
@section('title','Category') @push('style') 
@endpush 
@section('content')

<main class="app-content">

  <div class="loader"></div>

  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
      <p>Start a beautiful journey here</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
    </ul>
  </div>
  <div class="row">


    <form action="" id="form">
      <input type="text" class="form-control" id="search" placeholder="Search...">
    </form>
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Crete New Text
        </div>
        <div class="card-body">
          <form action="{{route('add.text')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="name">Image</label>
              <input type="file" name="image" accept="image/*" class="form-control">
            </div>
            <div class="form-group">

              <input type="submit" class="btn btn-block btn-success" value="Save">
            </div>
          </form>
        </div>
      </div>





    </div>

  </div>










</main>

@endsection