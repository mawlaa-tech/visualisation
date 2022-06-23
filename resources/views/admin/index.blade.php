@extends('admin.admin_master')
@section('admin')
@include('admin.sidebar')

  <!-- header area -->
          <!-- / header area -->
            <!-- sidebar area -->
            <!-- /sidebar Area-->


         


  
<div class="content_wrapper">
    <!--middle content wrapper-->




        @if(Session::has('error')) 
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong> {{ session::get('error') }} </strong>  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        @endif


 

    <div class="middle_content_wrapper">
        <!-- counter_area -->
        <section class="counter_area">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                             <span><i class="fa fa-user"></i></span>
                              <h2 class="timer count-number" data-to="300" data-speed="5000"></h2>
                        </div>
                     
                       <p class="count-text ">Patiens</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-table"></i></span>
                             <h2 class="timer count-number" data-to="500" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">Chambres</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fas fa-user"></i></span>
                             <h2 class="timer count-number" data-to="150" data-speed="1500"></h2>
                        </div>
                        <p class="count-text ">Personnels</p>
                          
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter">
                        <div class="counter_item">
                            <span><i class="fa fa-home"></i></span>
                             <h2 class="timer count-number" data-to="18" data-speed="1500"></h2>
                        </div>
                         <p class="count-text ">Départements</p>
                    </div>
                </div>
            </div>
        </section>
        <!--/ counter_area -->
        <!-- table area -->
                        
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->

@endsection