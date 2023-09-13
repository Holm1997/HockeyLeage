<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>Create match</title>
</head>
<body>

    <div class="container mt-3">
    <form action="{{ route('matches.store') }}" method="post">
        @csrf
    <div class="row">

        <div class="col">
            <select name="hometeam_id" class="form-select border-secondary" aria-label="Default select example">
                @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->title }} {{ $team->team_year }}</option>
                @endforeach
            </select>
        </div>

        <div class="col">
            <select name="guestteam_id" class="form-select border-secondary" aria-label="Default select example">
                @foreach ($teams as $team)
                <option value="{{ $team->id }}">{{ $team->title }} {{ $team->team_year }}</option>
                @endforeach
                
            </select>
        </div>

    </div>
    <input name="tournament_id" type="hidden" value="{{ $tournament->id }}">
    <button type="submit" class="btn btn-success">Create match</button>
    
    </form>
    </div>
    
</body>
</html>