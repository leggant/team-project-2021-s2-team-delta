<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize" class="col-span-3">BIT Studio Management Users</h1>
    </x-slot>
    <!-- A table of all users in the database -->
    @role('Super-Admin')
    <div class="grid-rows-2 max-w-screen-lg mt-6 mx-auto gap-6 pb-6">
        <div class="flex gap-x-8">
            <h2 class="text-3xl leading-9 text-gray-900" id="title">Current Registered Users</h2>
            <div class="flex gap-x-2">
                <form action="{{ route('users.create') }}" method="get" class="mx-auto">
                    @csrf
                    <x-jet-button dusk="new_user" type="submit">Add New User</x-jet-button>
                </form>
                <form action="{{ route('deactivated-users') }}" method="get" class="mx-auto">
                    @csrf
                    <x-jet-button dusk="deactivated_list" type="submit">View Deactivated Users</x-jet-button>
                </form>
                <form action="{{ route('student-list') }}" method="get" class="mx-auto">
                    @csrf
                    <x-jet-button dusk="student_list" type="submit">All Students</x-jet-button>
                </form>
            </div>
        </div>
        <table class="max-w-full mx-auto mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 w-max">Name</th>
                    <th class="px-4 py-2 w-max">Email</th>
                    <th class="px-4 py-2 w-max whitespace-nowrap">Papers</th>
                    <th class="px-4 py-2 w-min">Is Admin</th>
                    <th class="px-4 py-2 w-min">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                @if($users->is_active)
                <tr>
                    <td class="border px-4 py-2">{{ $users->name }}</td>
                    <td class="border px-4 py-2">{{ $users->email }}</td>
                    <td class="border px-4 py-2">
                        <ul class="whitespace-nowrap flex">
                            @foreach ($users->papers as $paper)
                            @if ($loop->first)
                            <li>{{ $paper->paper_name }}</li>
                            @elseif ($loop->last)
                            <li>, {{ $paper->paper_name }}</li>
                            @else
                            <li>, {{ $paper->paper_name }}</li>
                            @endif
                            @endforeach
                        </ul>
                    </td>
                    @if ($users->is_admin)
                    <!-- If a user is admin then it'll display yes and if they are not then it'll display no -->
                    <td class="border px-4 py-2">Administrator</td>
                    @else
                    <td class="border px-4 py-2">Lecturer</td>
                    @endif
                    <td class="border px-4 py-2">
                        <!-- Form that allows the user to delete a user -->
                        <div class="flex justify-start gap-4">
                            <form action="{{ route('users.edit', $users->id) }}" method="get">
                                @csrf
                                <x-jet-button type="submit" dusk="edit_user_{{$users->id}}" name="edit">Edit
                                </x-jet-button>
                            </form>
                            @if ($id != $users->id)
                            <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <x-delete-button dusk="deactivate_{{$users->id}}">Deactivate User
                                </x-delete-button>
                            </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @else
        <h2>You do not have permission to access this page</h2>
        @endrole
    </div>
</x-app-layout>