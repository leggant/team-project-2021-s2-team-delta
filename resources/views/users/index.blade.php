@extends('layouts.main-layout')

@section('content')
    <!-- A table of all users in the database -->
    @if(Auth::check() && Auth::user()->isAdmin())
        <div>
            <a style="margin-left:700px; color:white;" href="{{route('users.create')}}">Create</a>
        </div>
        <br>
        <div style="margin-left: 600px;">
            <table>
                <tbody>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Papers</th>
                        <th>Is Admin</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($user as $users)
                        <tr>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->paper_id}}</td>
                            @if($users->is_admin == 1) <!-- If a user is admin then it'll display yes and if they are not then it'll display no -->
                                <td>Yes</td>
                            @else
                                <td>No</td>
                            @endif
                            <td>
                                <!-- Form that allows the user to delete a user -->
                                @if($id != $users->id)
                                    <form action="{{route('users.destroy', $users->id)}}" method="POST">       
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                                    </form>
                                @endif   
                                <a class="btn btn-primary" href="{{route('users.edit', $users->id)}}" name="edit-users">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @else
        <h2>You do not have access to this page</h2>
    @endif
@endsection