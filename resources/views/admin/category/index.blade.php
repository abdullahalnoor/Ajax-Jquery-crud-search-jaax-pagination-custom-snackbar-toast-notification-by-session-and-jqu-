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
          Category Information

          <button type="button" class="btn btn-primary float-right" id="addCategory">
           <i class="fas fa-info-circle"></i>
           <i class="fas fa-info"></i>           
           <i class="far fa-times-circle"></i>
           <i class="fas fa-times-circle"></i>
           <i class="fas fa-times"></i>
           <i class="fas fa-check"></i>
           <i class="far fa-check-square"></i>
           <i class="fas fa-check-square"></i>
           <i class="fas fa-exclamation-triangle"></i>
           
           Add Category
          </button>

        </div>
        <div class="card-body ">
          <div class="table-responsive ">
  @include('admin.category.load')
          </div>
        </div>
      </div>





    </div>

  </div>










</main>



<div id="modal">

</div>
@endsection
 @push('script')





<script>
  $(document).ready(function(){

				var url= window.location.pathname;
				var urlsplit = url.split("/category/");
				var action = urlsplit[urlsplit.length-1];
				console.log(url);
				if(action == '/category'){

				}else{
						$("#search").val(action)
				}
		

			$("#search").on("keyup",function(){

				var val = $("#search").val();


        $('.loader').append('<img style="position: absolute; left: 50%; top: 50%; z-index: 100000;" src="{{asset('admin/img/giphy.gif')}}" />');
        console.log(val);
				if(val == ''){
					window.location.href = "{{route('category')}}";		
				}else{
							var url = "{{URL::to('/category')}}/"+val;
								$.ajax({			
									url:url
								})
								.done(function(data){
                  console.log('done');
									$(".load").html(data);	
                  $('.loader').empty('<img src="{{asset('admin/img/giphy.gif')}}" />');								
								})
				}	
			})
		});













  $(document).on("click",".pagination a",function(e){
			e.preventDefault();
			$('.loader').append('<img style="position: absolute; left: 50%; top: 50%; z-index: 100000;" src="{{asset('admin/img/giphy.gif')}}" />');
			// var url  = $(this).attr("href").split("page=")[1];			
			var url  = $(this).attr("href");
			window.history.pushState("", "", url);
			// console.log(url);
			$.ajax({		
				url:url
			})
			.done(function(data){
        $('.loader').empty('<img src="{{asset('admin/img/giphy.gif')}}" />');
				$(".load").html(data);
			
			});






      
		});








  $(document).ready(function(){

  

    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });


    



    
    $("#addCategory").on("click",function(e){
      e.preventDefault();
      $.get("{{route('create.category')}}",function(data){
        $("#modal").empty().append(data);
        $("#modal #createModal").modal("show");
      })
    });

    function errorMessage(err){
      $('#modal #errName').empty().html(err.responseJSON.errors.name);
       $('#modal #errStatus').empty().html(err.responseJSON.errors.status);
     
    }

    $("#modal").on("submit", "#saveInfo",function(e){
      e.preventDefault();
      var frmData = $(this).serialize();

      // var frmData = new FormData($(this)[0]);

      console.log(frmData);
      $.ajax({
        url:"{{route('save.category')}}",
        type:"POST",
        data:frmData,
      })
      .done(function(data){
        // console.log(data);
        $("#modal #createModal").modal("hide").empty();
     
        error('info save success');
        //  window.location.href = "{{route('category')}}";
        // location.reload();
        // setTimeout(function(){
        //    $("#refreshTable").load(location.href + " #refreshTable");
        //   //  location.reload();
        //  },300);
        
      })
      .fail(function(err){
        console.log(err.responseJSON.errors);
        errorMessage(err);
        
      });

    });


    $(document).on("click",".editBtn",function(e){
      e.preventDefault();
      var route = $(this).data('route');
      console.log(route);
      $.get(route,function(data){
        $("#modal").empty().append(data);
        $("#modal #editModal").modal("show");
      })
      .fail(function(err){
         var warningModal = "#warningModal";
          warning('resource not foound..');
      });
    });

    
    $("#modal").on("submit","#updateInfo",function(e){
      e.preventDefault();
      var frmData = $(this).serialize();
      $.ajax({
        url:"{{route('update.category')}}",
        type:"POST",
        data:frmData,
      })
      .done(function(data){
        $("#modal #editModal").modal("hide").empty();
      
        succes('info udated sucees');
      })
      .fail(function(err){
        console.log(err.responseJSON.errors.name);
        errorMessage(err);
      });
    });

    // $(document).on("click",".delBtn",function(e){
    //   e.preventDefault();
    //   var id = $(this).data("id");
    //   $("#delModal #delId").val(id);
    //   $("#delModal").modal("show");
    // });


     $(document).each(function(){
      $(this).on("click",".delBtn",function(e){
        e.preventDefault();
        var id = $(this).data("id");
        $("#delModal #delId").val(id);
        $("#delModal").modal("show");
      });
     });

    $("#delModal").on("submit","#delForm",function(e){
      e.preventDefault();
      var frmData = $(this).serialize();
      $.ajax({
        url:"{{route('delete.category')}}",
        type:"POST",
        data:frmData,
      })
      .done(function(data){
        $("#delModal").modal("hide");
        info('info deleted succes');
      })
      .fail(function(err){
        $("#delModal").modal("hide");
        error('resource not found');
      });
    });

  }); //end of ready

</script>
















































































































































































@endpush