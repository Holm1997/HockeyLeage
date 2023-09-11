@extends('includes.main')
@section('title', 'Create a new team')
@section('content')

<form action="/teams" method="post">
    @csrf
    <div class="mb-3 col-3">
        <label for="title" class="form-label">Название команды</label>
        <input name="title" type="text" class="form-control border-secondary" id="title">
    </div>

    <div class="mb-3 col-1">
        <label for="team_year" class="form-label">Игровой год</label>
        <input name="team_year" type="text" class="form-control border-secondary" id="team_year" >
    </div>
    <button type="submit" class="btn btn-primary">OK</button>
</form>
@endsection