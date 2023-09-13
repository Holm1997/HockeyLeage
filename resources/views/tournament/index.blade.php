@extends('includes.main')
@section('title', 'Seasons and tournaments')
@section('content')
@foreach ($seasons as $season)
    <h1>{{ $season->title }}</h1>
    <div class="d-flex">
    @foreach ($tournaments as $tournament)
        @if ($tournament->season_id == $season->id)
        <div class="card shadow bg-body rounded" style="width: 20rem;">
        <div class="card-body">
         <h5 class="card-title"> {{ $tournament->title }} {{ $tournament->teams_year }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ route('tournaments.show', $tournament->id) }}" class="btn btn-primary">Go somewhere</a>
        </div>
        </div>
        @endif
    @endforeach
    </div>
@endforeach

@endsection