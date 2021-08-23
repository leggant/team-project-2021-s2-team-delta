<x-app-layout>
    <!-- A table of all users in the database -->
    @if(Auth::check() && Auth::user()->isAdmin())
        <div>
        <x-jet-button><a href="{{route('users.create')}}">Create User</a></x-jet-button>
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
                                            <x-jet-danger-button><input type="submit" name="delete" value="Delete"></x-jet-danger-button>
                                    </form>
                                @endif   
                                <x-jet-button><a href="{{route('users.edit', $users->id)}}" name="edit-users">Edit</a></x-jet-button>
                            </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    @else
        <h2>You do not have access to this page</h2>
    @endif
</x-app-layout>