<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Evidence</title>
        <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/evidence-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">        
    </head>

    <body class="antialiased">
    @include('inc.navbar')
    
            <div class = evidence>                
            <h1>Evidence</h1>                
                
            <form action="{{route('evidence.store')}}" method="post" enctype="multipart/form-data">
            @csrf

           
            <label for="student">Student</label>
            <input name ="student" list="student" placeholder="Enter Student...">
            <datalist id="student">
                @foreach($student as $student)        
                <option value={{$student->name}}>{{$student->name}}</option>
                @endforeach
            </datalist>

            <label for="title">Description</label>
            <input type="text" name="title" id="title" placeholder="Enter Description..." required>
            <input type="file" name="image" required/>
        <button type="submit" class="button1">Upload Evidence</button>
    </form>         


    </div>

    </body>


</html>
