@extends('includes.main')
@section('title', 'Create a new player')
@section('content')

<form action="/players" method="post">
    @csrf
    <div class="mb-3 col-3">
        <label for="last_name" class="form-label">Фамилия игрока</label>
        <input name="last_name" type="text" class="form-control border-secondary" id="last_name">
    </div>

    <div class="mb-3 col-3">
        <label for="first_name" class="form-label">Имя игрока</label>
        <input name="first_name" type="text" class="form-control border-secondary" id="first_name">
    </div>

    <div class="mb-3 col-2">
        <label for="birthday" class="form-label">Дата рождения</label>
        <input name="birthday" type="text" class="form-control border-secondary" id="birthday" >
    </div>

    <div class="mb-3 col-2">
    <label for="position" class="form-label">Игровая позиция</label>
    <select name="position" id="position" class="form-select border-secondary" aria-label="position">
        <option value="нападающий">Нападающий</option>
        <option value="защитник">Защитник</option>
        <option value="вратарь">Вратарь</option>
    </select>
    </div>

    <div class="mb-3 col-2">
    <label for="team" class="form-label">Команда</label>
    <select name="team_id" id="team" class="form-select border-secondary" aria-label="team">
        @foreach ($teams as $team)
        <option value="{{ $team->id }}">{{ $team->title }} {{ $team->team_year }}</option>
        @enforeach
    </select>
    </div>

    

    <button type="submit" class="btn btn-primary">OK</button>
</form>
@endsection