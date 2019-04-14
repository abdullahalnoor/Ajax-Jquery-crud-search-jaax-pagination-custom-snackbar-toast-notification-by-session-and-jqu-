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
      <li class="breadcrumb-item"><a href="#"> 
        
        Blank Page</a></li>
    </ul>
  </div>
  <div class="row">


    <form action="" id="form">
      <input type="text" class="form-control" id="search" placeholder="Search...">
    </form>
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          Category Information

          <a href="{{route('add.text')}}" class="btn btn-primary float-right" id="addCategory">
            Add Category
          </a>

        </div>
        <div class="card-body ">









          <div class="table-responsive ">
            <table class="table load" id="refreshTable">
              <thead>
                <tr>

                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">

                    @foreach ($text as $key => $slide)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{ $key == 0 ? ' active' : '' }}"></li>
                    @endforeach

                  </ol>
                  <div class="carousel-inner">

                    @foreach ($text as $key => $slide)
                    <div class="carousel-item {{ $key == 0 ? ' active' : '' }}">
                      <img src="{{asset($slide->image)}}" class="d-block w-100" alt="{{$slide->name}}" style="height:500px;">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>{{$slide->name}}</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">

                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>





    </div>

  </div>










</main>