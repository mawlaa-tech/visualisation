@extends('seller.seller_master')
@section('seller')

<div class="container">
    <div class="row p-3">
        <div class="col-6">
            <h2 class="text-primary">
Modifier            </h2>
        </div>
        <br><br>
<form class="row g-3" action="{{url('user/update/proche/'.$proches->id)}}" method="POST" >

 @csrf
 <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Nom complet</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$proches->name}}" placeholder="nom">
      @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    
    <div class="col-md-6">
      <label for="inputAddress" class="form-label">Email</label>
      <input type="email" class="form-control"id="email" name="email"  value="{{$proches->email}}"placeholder="Email">
      @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Mot de passe</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Mot de passe">
      @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6">
      <label for="inputAddress2" class="form-label">Confrimer</label>
      <input type="text" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Mot de passe">
      @error('password_confirmation')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Telephone Proche</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{$proches->phone}}" placeholder="Telephone">
     
     
      @error('room_number')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    
    
    </div>
    
    <div class="col-12">
      <div class="form-check">
        
      </div>
    </div>
    <div class="col-12 center ">
      <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
    <br>
  </form>
</div>
  @endsection