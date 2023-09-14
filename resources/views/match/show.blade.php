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

<div class="row">

  <div class="col-auto">
    <table class="table table-sm">
      <thead class="table-dark">
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Ф.И.</th>
          <th scope="col">Д.Р.</th>
          <th scope="col">Поз.</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($home_players as $pl)
        <tr>
          <td scope="row" >{{ $pl->id }}</td>
          <td>{{ $pl->last_name }} {{ $pl->first_name }}</td>
          <td>{{ $pl->birthday }}</td>
          <td>{{ $pl->position }}</td>  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="col-auto ms-auto">
    <table class="table table-sm">
      <thead class="table-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Ф.И.</th>
          <th scope="col">Д.Р.</th>
          <th scope="col">Поз.</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($guest_players as $pl)
        <tr>
          <td scope="row">{{ $pl->id }}</td>
          <td>{{ $pl->last_name }} {{ $pl->first_name }}</td>
          <td>{{ $pl->birthday }}</td>
          <td>{{ $pl->position }}</td>  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>



@endsection