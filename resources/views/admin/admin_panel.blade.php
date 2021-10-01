<x-app-layout>

<!-- If user is admin and logged in it shows options -->
@role('Super-Admin')
    <div class="py-6 px-8 flex justify-center gap-4">
        <x-jet-button><a href="{{route('users.index')}}">Manage Users</a></x-jet-button>
    </div>
<!-- If not admin or logged in then user gets told they can't access page -->
@else
    <h2>You do not have permission to access this page</h2>
@endrole

</x-app-layout>