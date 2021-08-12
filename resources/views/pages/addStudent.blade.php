@extends('layouts.main-layout')
@section('content')
    <div class="studentForm">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <h1 class="title">Add Student</h1>
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" class="formInput" required>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="formInput" required>
            <label for="id">Student ID:</label>
            <input type="text" id="id" name="student_id" class="formInput" required>
            <label for="mail">Email:</label>
            <input type="email" id="mail" name="email" class="formInput" required>
            <label for="Github">Github:</label>
            <input type="text" id="github" name="github" class="formInput">
            <button class="addBtn" type="submit">Save</button>
        </form>
    </div>
@endsection
