@extends('includes.main')
@section('title', 'Matches')
@section('content')

<div class="row mb-3 align-tems-center">

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





<div class="row">

  <div class="col-auto">
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#homeModal">
    +
    </button>
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
          <td scope="row" ><input type="text" size="1" value="{{ $pl->id }}"></td>
          <td><input type="text" size="10" value="{{ $pl->last_name }}"> <input type="text" size="10" value="{{ $pl->first_name }}"></td>
          <td>{{ $pl->birthday }}</td>
          <td>{{ $pl->position }}</td>  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="col-auto ms-auto">
    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#guestModal">
      +
    </button>
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
          <td scope="row"><input type="text" size="1" value="{{ $pl->id }}"></td>
          <td><input type="text" size="10" value="{{ $pl->last_name }}"> <input type="text" size="10" value="{{ $pl->first_name }}"></td>
          <td>{{ $pl->birthday }}</td>
          <td>{{ $pl->position }}</td>  
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>



<!-- Modal ADD PLAYER FOR HOME TEAM-->
<div class="modal fade" id="homeModal" tabindex="-1" aria-labelledby="homeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="homeModalLabel">home</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/players" method="post">
        @csrf
        <div class="mb-3">
            <label for="last_name" class="form-label">Фамилия игрока</label>
            <input name="last_name" type="text" class="form-control border-secondary" id="last_name">
        </div>

        <div class="mb-3">
            <label for="first_name" class="form-label">Имя игрока</label>
            <input name="first_name" type="text" class="form-control border-secondary" id="first_name">
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Дата рождения</label>
            <input name="birthday" type="text" class="form-control border-secondary" id="birthday" >
        </div>

        <div class="mb-3">
          <label for="position" class="form-label">Игровая позиция</label>
          <select name="position" id="position" class="form-select border-secondary" aria-label="position">
            <option value="нападающий">Нападающий</option>
            <option value="защитник">Защитник</option>
            <option value="вратарь">Вратарь</option>
          </select>
        </div>

        <input name="team_id" type="hidden" value="{{ $match->hometeam_id }}">
        <input name="match_edit" type="hidden" value="{{ $match->id }}">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal ADD PLAYER FOR GUEST TEAM-->
<div class="modal fade" id="guestModal" tabindex="-1" aria-labelledby="guestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="guestModalLabel">guest</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/players" method="post">
        @csrf
        <div class="mb-3">
            <label for="last_name" class="form-label">Фамилия игрока</label>
            <input name="last_name" type="text" class="form-control border-secondary" id="last_name">
        </div>

        <div class="mb-3">
            <label for="first_name" class="form-label">Имя игрока</label>
            <input name="first_name" type="text" class="form-control border-secondary" id="first_name">
        </div>

        <div class="mb-3">
            <label for="birthday" class="form-label">Дата рождения</label>
            <input name="birthday" type="text" class="form-control border-secondary" id="birthday" >
        </div>

        <div class="mb-3">
          <label for="position" class="form-label">Игровая позиция</label>
          <select name="position" id="position" class="form-select border-secondary" aria-label="position">
            <option value="нападающий">Нападающий</option>
            <option value="защитник">Защитник</option>
            <option value="вратарь">Вратарь</option>
          </select>
        </div>

        <input name="team_id" type="hidden" value="{{ $match->guestteam_id }}">
        <input name="match_edit" type="hidden" value="{{ $match->id }}">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Добавить</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection