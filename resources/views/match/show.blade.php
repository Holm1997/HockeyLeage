@extends('includes.main')
@section('title', 'Matches')
@section('content')

<div class="row align-tems-center">

  <div class="col-auto me-auto">
    <div class="card" >
      
      <div class="card-body">
        <h3 class="card-title">{{$match->home_name}}</h3>
      </div>
    </div>
  </div>

  <div class="col-auto p-0 ms-auto me-auto bg-primary">
  <h1>0</h1> 
  </div>

  <div class="col-auto p-0 ms-auto me-auto bg-secondary text-center">
  <h2>-</h2> 
  </div>

  <div class="col-auto p-0 ms-auto me-auto bg-primary text-center">
  <h2>0</h2> 
  </div>

  <div class="col-auto ms-auto">
    <div class="card" >
     
      <div class="card-body">
        <h3 class="card-title">{{$match->guest_name}}</h3>
     
      </div>
    </div>
  </div>


</div>

<a href="{{ route('matches.edit', $match->id) }}">Edit match info</a>





@endsection