@extends('admin.admin_master')
@section('admin')
@include('admin.sidebar')
<br> 

<div class="container">
    <div class="row p-3">
        <div class="col-6">
            <h2 class="text-primary">
     Ajouter team
            </h2>
        </div>
        <br><br>
<form class="row g-3" style="background-color: aliceblue;"
 action="{{route('store.team')}}" method="POST" enctype="multipart/form-data">
 @csrf
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nom</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
      @error('name')

      <span class="text-danger"> {{ $message }} </span>
     
      @enderror
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Fonction</label>
      <input type="text" class="form-control" id="fonction" name="fonction" placeholder="fonction">
      @error('fonction')

      <span class="text-danger"> {{$message}} </span>
     
      @enderror
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">lien 1</label>
        <input type="text" class="form-control" id="lien_1" name="lien_1" placeholder="lien 1">
        @error('lien_1')
  
        <span class="text-danger"> {{$message}} </span>
       
        @enderror
      </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">lien 2</label>
      <input type="text" class="form-control"id="lien_2" name="lien_2" placeholder="lien 2">
    </div>
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">lien 3</label>
      <input type="text" class="form-control"id="lien_3" name="lien_3" placeholder="lien 3">
    </div>
    <div class="col-md-6">
        <label for="inputAddress" class="form-label">lien 4</label>
        <input type="text" class="form-control"id="lien_4" name="lien_4" placeholder="lien 4">
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