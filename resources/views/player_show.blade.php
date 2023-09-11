@extends('includes.main')
@section('title', $player->last_name )
@section('content')
    
    <h1>{{ $player->last_name }} {{ $player->first_name }}</h1>
@endsection