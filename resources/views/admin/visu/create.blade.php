@extends('admin.admin_master')
@section('admin')
@include('admin.sidebar')
<br> 

<div class="container">
    <div class="row p-3">
        <div class="col-6">
            <h2 class="text-primary">
     Ajouter Visu
            </h2>
        </div>
        <br><br>
<form class="row g-3" style="background-color: aliceblue;"
 action="{{route('store.visu')}}" method="POST" enctype="multipart/form-data">
 @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Titre</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Titre">
      @error('title')

      <span class="text-danger"> {{ $message }} </span>
     
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Description 1</label>
      <input type="text" class="form-control" id="description_1" name="description_1" placeholder="Description 1">
      @error('description_1')

      <span class="text-danger"> {{$message}} </span>
     
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Description 2</label>
      <input type="text" class="form-control"id="description_2" name="description_2" placeholder="Description 2">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Description 3</label>
      <input type="text" class="form-control"id="description_3" name="description_3" placeholder="Description 3">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Description 4</label>
      <input type="text" class="form-control"id="description_4" name="description_4" placeholder="Description 4">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Description 5</label>
      <input type="text" class="form-control"id="description_5" name="description_5" placeholder="Description 5">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Lien</label>
      <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien">
      @error('description_1')

      <span class="text-danger"> {{$message}} </span>
     
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">image</label>
      <input type="file" class="form-control" id="image" name="image" placeholder="image">
    </div>
   
  
   
   <!-- <div class="col-md-6">
      <label for="inputZip" class="form-label">Image</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>-->
    <div class="col-12">
      <div class="form-check">
        
      </div>
    </div>
    <div class="col-12 center ">
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
    <br>
  </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<script type="text/javascript">
      $(document).ready(function(){
     $('select[name="proche_email"]').on('change',function(){
          var proche_email = $(this).val();
          if (proche_email) {
            $.ajax({
              url: "{{ URL::to('admin/get/proches/') }}/"+proche_email,
              type:"GET",
              dataType:"json",
              success:function(data) { 
              var d =$('select[name="proche_number"]').empty();
              $.each(data, function(key, value){
              
              $('select[name="proche_number"]').append('<option value="'+ value.id + '">' + value.phone+ '</option>');

              });
              },
            });

          }else{
            alert('danger');
          }

            });
      });

 </script>
 <script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#one')
        .attr('src', e.target.result)
        .width(80)
        .height(80);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>

  @endsection