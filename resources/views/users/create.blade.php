@extends('layouts.main-layout')

@section('content')
    <!-- Form that allows user to create a new user -->
    @if(Auth::check() && Auth::user()->isAdmin())
        <form action="{{route('users.store')}}" method='POST'>
            {{csrf_field()}}
            <fieldset>
                <div>
                    <h5>Enter Name:</h5>
                    <input type="text" placeholder="Enter Name Here..." id="Name" name="Name" required>
                </div>
                <br>
                <div>
                    <h5>Enter Email:</h5>
                    <input type="email" placeholder="Enter Email Here..." id="Email" name="Email" required>
                </div>
                <br>
                <div>
                    <h5>Enter Password:</h5>
                    <input type="password" placeholder="Enter Password Here..." id="Password" name="Password" required>
                </div>
                <br>
                <div>
                    <h5>Admin?</h5>
                    <input type="checkbox" id="Admin" name="Admin">
                </div>
                <br>
                <div>
                    <input type='submit' name='submit' value='Submit'>
                </div>
            </fieldset>
        </form>
    @else
        <h2>You do not have access to this page</h2>
    @endif
@endsection