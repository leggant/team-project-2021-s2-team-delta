@extends('layouts.main-layout')

@section('content')
<!-- If user is admin and logged in it shows options -->
@if(Auth::check() && Auth::user()->isAdmin())
    <a style="margin-left:700px; color:white;" href="{{route('users.index')}}">Manage Users</a>
<!-- If not admin or logged in then user gets told they can't access page -->
@else
    <h2>You do not have access to this page</h2>
@endif

@endsection