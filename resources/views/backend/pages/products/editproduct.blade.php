@extends('backend.master_template.template') 

@section('content')
 
 
 <!-- ########## START: MAIN PANEL ########## -->
 <div class="br-mainpanel">
  
      <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Blank page</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
          <form action="{{Route('update',$product->id)}}" method="post">
              @csrf
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="text" name="name" id="name" placeholder="Enter product Name" value="{{$product->pname }}"
              class="form-control">
              <span class="text-danger">
                @error('name')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="description">Product Description</label>
              <input type="text" name="des" id="des" placeholder="Enter product Description" value="{{$product->description }}"
              class="form-control">
              <span class="text-danger">
                @error('des')
                {{$message}}
                @enderror
              </span>
            </div>
            <div class="form-group">
              <label for="catagory">Product Catagory</label>
              <select name="catagory" id="catagory"  class="form-control">
                  <option value="">-----select catagory----</option>
                  <option value="man" @if ($product->catagory== 'man') selected @endif>Man</option> 
                  <option value="women" @if ($product->catagory== 'women') selected @endif>women</option> 
                  <option value="children" @if ($product->catagory== 'children') selected  @endif>children</option> 
                </select>
            </div>
            <div class="form-group">
              <label for="size">Product Size</label>
              <select name="size" id="size" class="form-control">
                  <option value="">-----select size----</option>
                  <option value="s" @if ($product->size== 's') selected  @endif>s</option>
                  <option value="m" @if ($product->size== 'm') selected  @endif>m</option>
                  <option value="xl" @if ($product->size== 'xl') selected  @endif>xl</option>
                </select>
            </div>
          </div><!-- col-6 -->
          <div class="col-sm-6">
              <div class="form-group">
              <label for="cost price">Cost price</label>
              <input type="text" name="costPrice" id="costPrice" placeholder="Enter product cost price"
              class="form-control" value="{{$product->costprice }}"> 
            </div>
             
              <div class="form-group">
              <label for="sale price">Sale price</label>
              <input type="text" name="salePrice" id="salePrice" placeholder="Enter product Sale price"
              class="form-control" value="{{$product->saleprice }}">
             </div>
             
              <div class="form-group">
              <label for="quentity">Quentity</label>
              <input type="text" name="quentity" id="quentity" placeholder="product Quentity"
              class="form-control" value="{{$product->quentity }}">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select name="status" id="status" class="form-control">
                  <option value="">-----select status----</option>
                  <option value="1" @if ($product->status== '1') selected  @endif>active</option>
                  <option value="2" @if ($product->status== '2') selected  @endif>inactive</option>
                </select>
            </div>
            <div class="form-group">
                <button class="form-control btn btn-info">Update product</button>
            </div>

            </div>


        </div><!-- row -->
        </form>

      </div><!-- br-pagebody -->
      
      <!-- footer -->
      @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection