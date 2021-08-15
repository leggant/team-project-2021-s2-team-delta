@extends('layouts.main-layout')
@section('content')
    <div class="mx-auto sm:px-6 lg:px-8" style="width:50%">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <h1>{{ $cohort->subject }}</h1>
                <p>
                    Year: {{ $cohort->year }}
                    <br>
                    Semester: {{ $cohort->semester }}
                    <br>
                    Stream: {{ $cohort->stream }}
                    <br>
                    Students: {{ $cohort->students }}
                </p>
                <br>
            </div>
        </div>
    </div>
@endsection
