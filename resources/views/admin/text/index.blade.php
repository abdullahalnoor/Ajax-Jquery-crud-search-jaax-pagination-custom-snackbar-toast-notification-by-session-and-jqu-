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

          <button type="button" class="btn btn-primary float-right" id="addCategory">
            Add Category
          </button>

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