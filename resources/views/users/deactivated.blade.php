<x-app-layout>
@role('Super-Admin')
    @if(\Session::has('success'))
        <div class="text-center bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
            <ul>
                <li class="text-sm">{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if(\Session::has('error'))
        <div class="text-center bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" >
            <ul>
                <li class="font-bold">{!! \Session::get('error') !!}</li>
            </ul>
        </div>
    @endif
    @if(count($users) >= 1)
        <div class="py-6 text-center">
            <form action="{{ route('users.index') }}" class="gap-4">
                <x-jet-button dusk="back" type='submit'>Back</x-jet-button>
            </form>
        </div>
        <form action="{{route('enable-users')}}" method="POST">
            @csrf
            <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-full grid mb-6">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($users as $user)
                            <tr>
                                <td><input type="checkbox" name="selected_users[]" value="{{$user->id}}"></td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
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
            <div class="py-6 text-center">
                <x-jet-button dusk="activate" type="submit">Activate Users</x-jet-button>
            </div>
        </form>
    @else
        <h2 class="text-center">All Users Have Been Activated</h2>
        <div class="py-6 text-center">
            <form action="{{ route('users.index') }}" class="gap-4">
                <x-jet-button dusk="back" type='submit'>Back</x-jet-button>
            </form>
        </div>
    @endif
@else
    <h2 class="text-center">You do not have permission to access this page</h2>
@endrole
</x-app-layout>