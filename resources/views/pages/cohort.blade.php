@extends('layouts.main-layout')
@section('content')
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <h1>Add Cohort</h1>
                <form action="{{ route('pages.cohort') }}" method="post">
                    @csrf
                    <label for="subject">Subject: <input type="text" name="subject" id="subject"></label> 
                    <label for="year">Year: <input type="text" name="year" id="year"></label> 
                    <label for="semester">Semester: <input type="text" name="semester" id="semester"></label> 
                    <label for="stream">Stream: <input type="text" name="stream" id="stream"></label> 
                    <label for="students">Students:</label>
                    <textarea name="students" id="students" rows="10" cols="30"></textarea>
                    <input type="submit" name="addCohort" value="Add" />
                </form>
            </div>
        </div>
        <div id="bottom-table">
            <table id="tables">
                <thead>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Stream</th>
                    <th>Students</th>
                </thead>
                <tbody>
                    @foreach ($cohorts as $cohort)
                        <tr>
                            <td><a href="/cohort/{{ $cohort->id }}">{{ $cohort->subject }}</a></td>
                            <td>{{ $cohort->year }}</td>
                            <td>{{ $cohort->semester }}</td>
                            <td>{{ $cohort->stream }}</td>
                            <td>{{ $cohort->students }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection