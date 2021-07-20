<!DOCTYPE html>
<html>
  <head>
  <link href="{{ asset('css/notes-styles.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
  <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
  
    <title>Student Note Form</title>
  </head>
  <body>
  @include('inc.navbar')
    <div class="testbox">
      <form action="{{route('pages.notes')}}" method="post">
      @csrf
        <h1>Notes</h1>
        <p>Add note for a student</p>
        <div style="display:flex; flex-direction: row; justify-content: center; align-items: center">
            <label for="student">Student: </label>
            <input name="student" list="student" />
            <datalist id="student">
            @foreach($student as $student)        
            <option value={{$student->name}}>{{$student->name}}</option>
            @endforeach
            </datalist>
        </div>
        <hr />

        <h4>Notes:</h4>
        <textarea style="font-family: sans-serif;" rows="5" name="notes" required></textarea>
        <div class="btn-block">
          <button type="submit" name="addNotes" value="Add" >Submit Note</button>
        </div>
      </form>
    </div>
  </body>
</html>