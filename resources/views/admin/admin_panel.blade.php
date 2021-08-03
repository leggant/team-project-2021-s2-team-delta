@extends('layouts.main-layout')

@section('content')

@if(Auth::check() && Auth::user()->isAdmin())
    <a style="margin-left:700px; color:white;" href="{{route('users.index')}}">Manage Users</a>
@else
    <h2>You do not have access to this page</h2>
@endif

@endsection