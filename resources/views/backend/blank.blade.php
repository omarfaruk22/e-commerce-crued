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
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            

          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- br-pagebody -->
      
      <!-- footer -->
      @include('backend.includes.footer')

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    @endsection