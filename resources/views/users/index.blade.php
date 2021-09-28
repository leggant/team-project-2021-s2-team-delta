<x-app-layout>
    <!-- A table of all users in the database -->
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4 md:justify-between">
            <x-jet-button><a href="{{route('users.create')}}">Create User</a></x-jet-button>
            <x-jet-button><a href="{{route('admin.admin-panel')}}">Back</a></x-jet-button>
        </div>
        <br>
        <div class="flex justify-center">
            <table class="table-fixed w-3/4">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Papers</th>
                        <th class="px-4 py-2 w-20">Is Admin</th>
                        <th class="px-4 py-2 w-20">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $users)
                        <tr>
                            <td class="border px-4 py-2">{{$users->name}}</td>
                            <td class="border px-4 py-2">{{$users->email}}</td>
                            <td class="border px-4 py-2">
                                @foreach($users->papers as $paper)
                                    {{$paper->paper_name}}<br>
                                @endforeach
                            </td>
                            @if($users->is_admin == 1) <!-- If a user is admin then it'll display yes and if they are not then it'll display no -->
                                <td class="border px-4 py-2">Yes</td>
                            @else
                                <td class="border px-4 py-2">No</td>
                            @endif
                            <td class="border px-4 py-2">
                                <!-- Form that allows the user to delete a user -->
                                @if($id != $users->id)
                                    <form action="{{route('users.destroy', $users->id)}}" method="POST">       
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE')}}
                                            <x-jet-danger-button type="submit" name="delete">Delete</x-jet-danger-button>
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
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>
