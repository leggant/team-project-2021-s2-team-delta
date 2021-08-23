<<<<<<< HEAD
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div class="p-6">
                <form action="{{ route('cohorts.store') }}" method="post">
                    @csrf
                    <label for="paper">Paper:
                        <select id="paper" name="paper" required>
                            @foreach($papers as $paper)
                                <option value="{{$paper->id}}">{{$paper->paper_name}}</option>
                            @endforeach
                        </select>
                    </label> 
                    <label for="year">Year: <input type="text" name="year" id="year" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="semester">Semester: <input type="text" name="semester" id="semester" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="stream">Stream: <input type="text" name="stream" id="stream" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <x-jet-button>Save</x-jet-button>
                </form>
=======
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Cohort</title>


        <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cohort-styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
        <style>
        td {
            text-align: center;
        }
        #tables {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #tables td, #tables th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        #tables th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #13607c;
            color: white;
        }   

        #bottom-table {
            position: relative;
            bottom: 0;
        }
        </style>

    </head>
    <body>
    @include('inc.navbar')
            <div class="mx-auto sm:px-6 lg:px-8" style="width:50%">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">

                                <h1>Add Cohort</h1>

                                <form action="{{route('pages.cohort')}}" method="post">
                                @csrf


                                Subject: <input type="text" name="subject" id="subject">
                                <br><br>
                                Year: <input type="text" name="year" id="year">
                                <br>
                                Semester: <input type="text" name="semester" id="semester">
                                <br><br>
                                Students:<br> <textarea name="students" id="students" rows="10" cols="30"></textarea>    
                                <br>
                                <!--
                                <input type="submit" name="add_student" id="Add student">  
                                -->
                                <br>
                                Stream: <input type="text" name="stream" id="stream">
                                <br><br><br>

                                <input type="submit" name="addCohort" value="Add" />
                                </form>
                                <br><br><br><br>

                        </div>

                    </div>
                    <div id="bottom-table">
                        <table id="tables">
                            <thead>
                                <th>Subject</th>
                                <th>Year</th>
                                <th>Semester</th>
                                <th>Students</th>
                                <th>Stream</th>
                            </thead>
                            <tbody>
                                @foreach ($cohorts as $cohort)
                                <tr>
                                    <td><a href="/cohort/{{ $cohort->id }}">{{ $cohort->subject }}</a></td>
                                    <td>{{ $cohort->year }}</td>
                                    <td>{{ $cohort->semester }}</td>
                                    <td>{{ $cohort->students }}</td>
                                    <td>{{ $cohort->stream }}</td>
                                    
                                    <?php
/* (php only for comment). Below functionality TBD.
                                    <td>
                                        <a class="btn btn-sm btn-success" href="{{ action('ProductsController@edit', ['id' => $cohort->id]) }}">Edit</a>

                                        
                                        <form style="display:inline-block !important" action="{{ action('App\Http\Controllers\CategoryController@deleteCategory', ['name' => $cohort->name]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"> Delete</button>
                                        </form>
                                    </td>
                                    */
?>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br><br><br><br>
                        </div>
                </div>
>>>>>>> master
            </div>
        </div>
        <div>
            <table class="border-gray-300 rounded-md shadow-sm block mt-1 w-full">
                <thead>
                    <th>Paper</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Stream</th>
                </thead>
                <tbody>
                    @foreach ($cohorts as $cohort)
                        <tr>
                            <td>Studio {{ $cohort->paper_id }}</td>
                            <td>{{ $cohort->year }}</td>
                            <td>{{ $cohort->semester }}</td>
                            <td>{{ $cohort->stream }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>