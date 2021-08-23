@extends('layouts.main-layout')

@section('content')
    <!-- Form that allows the user to edit a user -->
    @if(Auth::check() && Auth::user()->isAdmin())
        <div>
            <a href="{{url('/users')}}">Back</a>
        </div>
        <form action="{{route('users.update', $user->id)}}" method='POST'>
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <fieldset>
                <div>
                    <h5>Enter Name:</h5>
                    <input type="text" placeholder="{{$user->name}}" id="Name" name="Name" required>
                </div>
                <br>
                <div>
                    <h5>Enter Email:</h5>
                    <input type="email" placeholder="{{$user->email}}" id="Email" name="Email" required>
                </div>
                <br>
                <div>
                    <h5>Admin?</h5>
                    @if($user->is_admin == 1)
                        <input type="checkbox" id="Admin" name="Admin" checked>
                    @else
                        <input type="checkbox" id="Admin" name="Admin">
                    @endif
                </div>
                <br>
                <div>
                    <h5>Select Paper:</h5>
                    <select id="paper" name="Paper" required>
                        @foreach($papers as $paper)
                            <option value="{{$paper->id}}">{{$paper->paper_name}}</option>
                        @endforeach
                    </select>
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