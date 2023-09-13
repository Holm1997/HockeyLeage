@extends('includes.main')
@section('title', 'Matches')
@section('content')
<h1>Matches</h1>
@foreach($m as $match)
<a href="{{ route('matches.show', $match['id']) }}">
<div class="card">
  <div class="card-body">
  {{$match['home']->title}} - {{ $match['guest']->title }}
  </div>
</div>
</a>
@endforeach     
@endsection