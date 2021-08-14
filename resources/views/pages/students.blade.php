@extends('layouts.main-layout')
@section('content')
    <div class="evidence">
        @if (Auth::check())
            <h1 class="capitalize">Welcome {{ Str::title($user->name) }}</h1>
        @else
            <h1>Welcome</h1>
        @endif
        <div class="table">
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
            <table cellspacing="0" id="studentTable" class="mt-4">
                <tr>
                    <th onclick="sortTable(0)">Name</th>
                    <th onclick="sortTable(1)">Student ID</th>
                    <th onclick="sortTable(2)">Email</th>
                    <th onclick="sortTable(3)">Github</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td><a id="studentLink"
                                href="{{ route('students.show', $student) }}">{{ $student->name }}
                        </td></a>
                        <td>{{ $student->idstudent }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->github }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection