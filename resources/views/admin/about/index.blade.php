@extends('admin.admin_master')
@section('admin')
@include('admin.sidebar')

<div class="row p-3">
    

    <div class="col-6">
        <h6 class="text-primary">
 Liste de about
        </h6>
    </div>
    <div class="col-6 text-end">
        
<a href="{{route('add.about')}}" class="btn btn-primary">
<i class="bi bi-person-plus-fill" style="font-size: 1rem; color: white;"></i> Ajouter un about
</a>
    </div>

</div>
        <!--/ counter_area -->
        <!-- table area -->
      <section class="table_area">
            <div class="panel">
                <div class="panel_header">
                    <div class="panel_title"><span>Liste de about</span></div>
                </div>
                <div class="panel_body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Titre</th>
                                  <th>Description 1</th>
                                  <th>Description 2</th>

                                  <th>Image</th>
                                  

                                


                                  <td>
                                   Action
                                    </td>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($abouts as $about)
                              <tr>
                                <td scope="row"></td>

                                  <td>{{$about->title}}</td>
                                  <td>{{$about->description_1}}</td>
                                  <td>{{$about->description_2}}</td>

                                  <td><img src="{{ asset($about->image) }}" style="height:40px; width:70px;"></td>

                                  <td>
                                    @if($about->created_at == NULL)
                                    <span class="text-danger">Pas de donnée</span>
                                    @else
                                    {{ Carbon\Carbon::parse($about->created_at)->diffForHumans()}}</td>
                                    @endif

                                  </td>
                                   
                                  
                                  <td>
                                    <a href="" class="btn btn-info">
                                    <i class="bi-pencil-square" style="font-size: 1rem; color: white;"></i>
                                  </a>
                                    <a href="" onclick="return confirm('etes vous sure de vouloir siprimmer!!')" class="btn btn-danger">
                                    <i class="bi-trash3-fill" style="font-size: 1rem; color: white;"></i>

                                  </a>
                                   

                                </td>
                              </tr>
                             @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /table -->
            <!-- chart area -->
            

@endsection