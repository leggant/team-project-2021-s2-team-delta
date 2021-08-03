<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('inc.navbar')
    <div class="evidence">
            @if(Auth::check())
              <h1>Welcome {{$user->name}}</h1>
            @else
              <h1>Welcome</h1>
            @endif 
        <div class="table">
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
            <table cellspacing="0" id="studentTable">
                <tr>
                    <th onclick="sortTable(0)">Name</th>""
                    <th onclick="sortTable(1)">Email</th>
                    <th onclick="sortTable(2)">Github</th>
                </tr>
                @foreach ($addStudent as $student)
                    <tr>
                        <td><a id="studentLink"
                                href="{{ route('pages.getStudent', $student->id) }}">{{ $student->name }}
                        </td></a>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->github }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>