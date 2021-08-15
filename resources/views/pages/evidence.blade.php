@extends('layouts.main-layout')
@section('content')
    <div class=evidence>
        <h1>Evidence</h1>
        <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="student">Student</label>
            <input name="student" list="student" placeholder="Enter Student...">
            <datalist id="student">
                @foreach ($students as $student)
                    <option value={{ $student->name }}>{{ $student->name }}</option>
                @endforeach
            </datalist>
            <label for="title">Description</label>
            <input type="text" name="title" id="title" placeholder="Enter Description..." required>
            {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
            <input type="file" name="image" accept="image/*,.pdf,.doc,.docx,.md,.html" multiple required />
            <button type="submit" class="button1">Upload Evidence</button>
        </form>
    </div>
@endsection
