<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>View Cohort</title>


        <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cohort-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">

    </head>
    <body>
    @include('inc.navbar')
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
    </body>
</html>
