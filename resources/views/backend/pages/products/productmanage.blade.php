@extends('backend.master_template.template') 

@section('content')
 
 
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="br-mainpanel">
  
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Dashboard</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
        <div class="row ">
          <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#sl</th>
                        <th>Product name</th>
                        <th>Description</th>
                        <th>Catagory</th>
                        <th>Size</th>
                        <th>Cost price</th>
                        <th>Sale price</th>
                        <th>Quentity</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $sl=1 @endphp
                    @foreach ($products as $data)
                    <tr>
                        <td> {{$sl}} </td>
                        <td> {{$data->pname}} </td>
                        <td> {{$data->description}} </td>
                        <td> {{$data->catagory}} </td>
                        <td> {{$data->size}} </td>
                        <td> {{$data->costprice}} </td>
                        <td> {{$data->saleprice}} </td>
                        <td> {{$data->quentity}} </td>
                        <td> @if ($data->status==1)
                            <span class="badge badge-info">Active</span>
                            @else
                            <span class="badge badge-warning">Inactive</span>
                            @endif
                            
                    </td>
                    <td>
                        <a href="{{ Route('edit',$data->id)}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-sm btn-danger"> <i class="fa fa-trash" data-target='#delete{{$data->id}}' data-toggle="modal"></i></button>
                    </td>
                    </tr>
                    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure want to delete this product?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="{{Route('delete',$data->id)}}" type="button" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
                    @php $sl++ @endphp
                    @endforeach
                </tbody>
            </table>

          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
      
      <!-- footer -->
      @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection