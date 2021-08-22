<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title> 
    <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/student-styles.css') }}" rel="stylesheet">
</head>

<body>
@include('inc.navbar')

<div class="studentForm">

  <form action="{{route('addStudents.storeData')}}" method="post" enctype="multipart/form-data">
  @csrf
  
    <h1 class="title">Add Student</h1>
    
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="formInput" required>
      
      <label for="mail">Email:</label>
      <input type="email" id="email" name="email" class="formInput" required>
      
      <label for="github">Github:</label>
      <input type="text" id="github" name="github" class="formInput" required>     


    <button class="addBtn" type="submit">+</button>
  </form>
  </div>  
  
</body>
</html>
