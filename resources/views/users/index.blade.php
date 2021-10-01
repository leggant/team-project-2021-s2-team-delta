<x-app-layout>
    <!-- A table of all users in the database -->
    @role('Super-Admin')
    <div class="grid-rows-2 max-w-screen-lg mt-6  mx-auto gap-6">
        <div class="flex">
            <h2 class="text-3xl leading-9 text-gray-900">Current Registered Users</h2>
            <form action="{{ route('users.create') }}" method="get" class="mx-auto">
                @csrf
                <x-jet-button type="submit">Create New User</x-jet-button>
            </form>
        </div>
        <table class="max-w-full mx-auto mt-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 w-max">Name</th>
                    <th class="px-4 py-2 w-max">Email</th>
                    <th class="px-4 py-2 w-max">Papers</th>
                    <th class="px-4 py-2 w-min">Is Admin</th>
                    <th class="px-4 py-2 w-min">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $users)
                    <tr>
                        <td class="border px-4 py-2">{{ $users->name }}</td>
                        <td class="border px-4 py-2">{{ $users->email }}</td>
                        <td class="border px-4 py-2">
                            @foreach ($users->papers as $paper)
                                {{ $paper->paper_name }}<br>
                            @endforeach
                        </td>
                        @if ($users->is_admin)
                            <!-- If a user is admin then it'll display yes and if they are not then it'll display no -->
                            <td class="border px-4 py-2">Yes</td>
                        @else
                            <td class="border px-4 py-2">No</td>
                        @endif
                        <td class="border px-4 py-2">
                            <!-- Form that allows the user to delete a user -->
                            <div class="flex justify-start gap-4">
                                <form action="{{ route('users.edit', $users->id) }}" method="get">
                                    @csrf
                                    <x-jet-button type="submit" name="edit">Edit</x-jet-button>
                                </form>
                                @if ($id != $users->id)
                                    {{-- <form action="{{ route('users.update', $users->id) }}" method="POST"> --}}
                                    <form action="#">
                                        @csrf
                                        {{-- @method('PUT') --}}
                                        <x-jet-danger-button type="submit">Deactivate User</x-jet-danger-button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>You do not have permission to access this page</h2>
        @endrole
    </div>
</x-app-layout>
