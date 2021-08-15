@extends('layouts.main-layout')
@section('content')
    <div class="testbox">
        <form action="{{ route('pages.notes') }}" method="post">
            @csrf
            <h1>Notes</h1>
            <p>Add note for a student</p>
            <div>
                <label for="student">Student: </label>
                <input name="student" list="student" />
                <datalist id="student">
                    @foreach ($students as $student)
                        <option value={{ $student->name }}>{{ $student->name }}</option>
                    @endforeach
                </datalist>
            </div>
            <h4>Notes:</h4>
            <textarea rows="5" name="notes" required></textarea>
            <div class="btn-block">
                <button type="submit" name="addNotes" value="Add">Submit Note</button>
            </div>
        </form>
    </div>
@endsection
