@php
$old=DB::table('olds')
->join('sellers', 'olds.proche_email','sellers.id')
        ->join('rooms', 'olds.room_number', 'rooms.id')
        ->select('olds.*','sellers.phone','sellers.email', 'rooms.room','rooms.Temperature')
        ->where('sellers.id', Auth::guard('seller')->user()->id)->first();
@endphp
@extends('seller.seller_master')
@section('seller')

  <!-- header area -->
            <header class="header_area">
                <!-- logo -->
                <div class="sidebar_logo">
                    <a href="index.html">
 <!-- <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid logo1">-->
   <img src="{{ asset('panel/assets/images/logo_small.png') }}" alt="" class="img-fluid logo2">
   <img src="{{ asset('panel/assets/images/logo_small.png') }}" alt="" style="width:55px; height:50px;" class="img-fluid logo1">

                    </a>
                </div>
                <div class="sidebar_btn">
                    <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
                </div>
                <ul class="header_menu">
              
                    <li><a data-toggle="dropdown" href="#">  {{Auth::guard('seller')->user()->name}} <i class="far fa-user"></i></a>
                            <div class="user_item dropdown-menu dropdown-menu-right">
                                <div class="admin">
                                    <a href="#" class="user_link"><img src="panel/assets/images/admin.jpg" alt=""></a>
                                </div>
                            <ul>
                                <li><a href="#"></span>{{ Auth::guard('seller')->user()->email}} </a></li>
                                <li><a href="#"><span><i class="fas fa-user"></i></span> Profile</a></li>
                                <li><a href="{{url('user/edit/proche/'.Auth::guard('seller')->user()->id)}} "><span><i class="fas fa-cogs"></i></span> Changer Password</a></li>
                                <li>


  <a href="{{ route('seller.logout') }}"><span><i class="fas fa-unlock-alt"></i></span> Deconnecter</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>

                        <a class="responsive_menu_toggle" href="#"><i class="fas fa-bars"></i></a></li>
                </ul>
            </header><!-- / header area -->
            <!-- sidebar area -->
            <aside class="sidebar-wrapper ">
              <nav class="sidebar-nav">
                 <ul class="metismenu" id="menu1">
                    <li class="single-nav-wrapper">
                        <a href="{{url('user/dashboard')}}" class="menu-item">
                            <span class="left-icon"><i class="fas fa-home"></i></span>
                            <span class="menu-text">Accueil</span>
                        </a>
                      </li>
                    
                      <li class="single-nav-wrapper">
                          <a class="has-arrow menu-item" href="#" aria-expanded="false">
                            <span class="left-icon"><i class="fas fa-table"></i></span>
                              <span class="menu-text">Personne dgé</span>
                          </a>
                            <ul class="dashboard-menu">
                              <li><a href="#">table</a></li>
                            </ul>
                      </li>
                     
                     
                 
                    
                    
                 
                    
                    </ul>
              </nav>
            </aside><!-- /sidebar Area-->


         


  
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
        
        <!--/ counter_area -->
        <!-- table area -->
      
    

    
   
        <!--/ counter_area -->
        <!-- table area -->
      <section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span> Proche</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nom</th>
                                  <th>Prénom</th>

                                  <th>Age</th>
                                  <th>adresse</th>
                                  <th>Téléphone</th>
                                  <th>Email</th>
                                  <th>Chambre</th>
                                  <th>Date</th>

                                  <th>status</th>

                              </tr>
                          </thead>
                          <tbody>
                          <tbody>
                            
                              <tr>
                                <td scope="row"></td>

                                  <td>{{$old->nom}}</td>
                                  <td>{{$old->prenom}}</td>
                                  <td>{{$old->age}}</td>
                                  <td>{{$old->adresse}}</td>

                                  <td>{{$old->phone}}</td>
                                  <td>{{$old->email}}</td>

                                  <td>{{$old->room}}</td>
                                  <td>
                                    @if($old->created_at == NULL)
                                    <span class="text-danger">Pas de donnée</span>
                                    @else
                                    {{ Carbon\Carbon::parse($old->created_at)->diffForHumans()}}</td>
                                    @endif

                                  </td>
                                   
                                  <td>
                                    @if($old->Temperature  == NULL)
                                    <span class="badge badge-warning">Pas de donnée</span>
                                    @elseif($old->Temperature > 30)
                                    <span class="badge badge-danger">TMP tros élevée</span>
                                    @elseif($old->Temperature < 5)
                                    <span class="badge badge-warning">TMP tros bat</span>
                                    @else
                                    <span class="badge badge-success">TMP cool</span>
                                  @endif


                                  </td>
                                    
                          </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /table -->
            <!-- chart area -->  
    </div><!--/middle content wrapper-->
</div><!--/ content wrapper -->

@endsection