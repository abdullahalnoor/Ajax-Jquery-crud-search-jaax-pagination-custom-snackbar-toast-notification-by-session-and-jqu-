<div class="modal fade border-info" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">



    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="updateInfo">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="name" class="text-capitalize">category Name</label>
            <input type="hidden" name="id" value="{{$category->id}}"> <input type="text" class="form-control" name="name"
              value="{{$category->name}}">
            <span id="errName" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label for="status" class="text-capitalize"> select</label>
            <select class="form-control" name="status">
              
        <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Published</option>
                      <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Unpublished</option>    
                      <span id="errStatus" class="text-danger"></span>          
                    </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Save changes">
        </div>
      </form>
    </div>





  </div>
</div>