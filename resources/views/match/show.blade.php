@extends('includes.main')
@section('title', 'Matches')
@section('content')
@foreach($match as $m)
<h1>Match {{ $m->id }}</h1>


  {{$m->hometeam_id}} - {{ $m->guestteam_id }}
@endforeach
@endsection