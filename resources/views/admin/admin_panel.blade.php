<<<<<<< HEAD
<x-app-layout>

<!-- If user is admin and logged in it shows options -->
@if(Auth::check() && Auth::user()->isAdmin())
    <div style="">
        <x-jet-button><a href="{{route('users.index')}}">Manage Users</a></x-jet-button>
    </div>
=======
@extends('layouts.main-layout')

@section('content')
<!-- If user is admin and logged in it shows options -->
@if(Auth::check() && Auth::user()->isAdmin())
    <a style="margin-left:700px; color:white;" href="{{route('users.index')}}">Manage Users</a>
>>>>>>> master
<!-- If not admin or logged in then user gets told they can't access page -->
@else
    <h2>You do not have access to this page</h2>
@endif

<<<<<<< HEAD
</x-app-layout>
=======
@endsection
>>>>>>> master
