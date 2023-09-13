@extends('includes.main')
@section('title', 'Tournaments')
@section('content')
    <h1>{{ $tournament->title }} {{ $tournament->teams_year }}</h1>
    
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Команда</th>
      <th scope="col">В</th>
      <th scope="col">П</th>
      <th scope="col">Н</th>
      <th scope="col">Очки</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  @foreach ($teams as $team)
    <tr>
      <th scope="row">{{ $team->title }} {{ $team->team_year }}</th>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
    </tr>
@endforeach
  </tbody>
</table>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button>



<a href="{{ route('matches.create', $tournament->id) }}">Create a new match</a>
<div class="offcanvas offcanvas-start text-bg-primary text-white" data-bs-scroll="true" style="width: 280px;" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">tournament section</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="nav nav-pills flex-column text-center">
      <li class="nav-item"><a href="{{ route('tournaments.index') }}" style="text-decoration:none; color:white;">tournaments</a></li>
      <li class="nav-item"><a href="{{ route('matches.index', $tournament->id) }}" style="text-decoration:none; color:white;">matches</a></li>
      <li class="nav-item"><a href="#" style="text-decoration:none; color:white;">statistics</a></li>
    </ul>

  </div>
</div>
@endsection