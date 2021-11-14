<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Deactivated User List</h1>
    </x-slot>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-4 mt-8 grid-flow-row">
        @role('Super-Admin')
        @if(count($users) >= 1)
        <form action="{{route('enable-users')}}" method="POST">
            @csrf
            @if(\Session::has('success'))
            <div class="text-center bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
                <ul>
                    <li class="text-sm">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
            <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto grid gap-y-4">
                <h2 class="text-center text-2xl">Deactivated Users</h2>
                <x-jet-button dusk="activate" type="submit">Activate Selected Users</x-jet-button>
                @if(\Session::has('error'))
                <div class="text-center bg-orange-100 border-t border-b border-red-500 text-red-700 px-4 py-3">
                    <ul>
                        <li class="font-bold">{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
                @endif
                <table class="border table-fixed">
                    <thead>
                        <tr>
                            <th class="py-2 w-1/6">Activate?</th>
                            <th class="py-2 w-1/4">Name</th>
                            <th class="py-2 w-1/4">Email</th>
                            <th class="py-2 w-1/6">Role</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($users as $user)
                        <tr>
                            <td class="border py-2">
                                <input type="checkbox" dusk="user_{{ $user->id }}" name="selected_users[]" value="{{$user->id}}"
                                    class="py-2 px-2 hover:cursor-pointer">
                            </td>
                            <td class="border py-2">{{$user->name}}</td>
                            <td class="border py-2">{{$user->email}}</td>
                            <td class="border py-2">
                                @if($user->is_admin == 1)
                                Administrator
                                @else
                                Lecturer
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
        @else
        <h2 class="text-center text-2xl">All Users Have Been Activated</h2>
        <div class="py-6 text-center">
            <form action="{{ route('users.index') }}" class="gap-4">
                <x-jet-button dusk="back" type='submit'>Back</x-jet-button>
            </form>
        </div>
        @endif
        @else
        <h2 class="text-center">You do not have permission to access this page</h2>
        @endrole
    </div>
</x-app-layout>