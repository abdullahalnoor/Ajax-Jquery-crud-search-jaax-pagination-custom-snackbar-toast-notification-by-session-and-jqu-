
  <table class="table load" id="refreshTable">
    <thead>
      <tr>
  
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
      </tr>
    </thead>
    <tbody>
  
      @foreach($category as $item)
      <tr>
  
        <td> {{$item->name}} </td>
        <td>{{$item->status == 0 ? 'Unpublished' : 'Published'}}</td>
        <td>
          <a href="" data-route="{{route('edit.category',$item->id)}}" class="btn btn-info editBtn">Edit</a>
          <a href="" data-route="{{route('edit.category',$item->id)}}" class="btn btn-danger delBtn" data-id="{{$item->id}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2">
          {{ $category->links() }}
        </td>
      </tr>
    </tfoot>
  </table>
