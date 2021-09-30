<x-app-layout>
    <!-- Form that allows the user to edit a user -->
    @role('Super-Admin')
    <div class="w-max mx-auto sm:px-6 lg:px-8 mt-8">
    <form action="{{ route('users.index') }}" class="pt-6 flex justify-center gap-4 md:justify-between">
        <x-jet-button type='submit'>Back</x-jet-button>
    </form>
    <form action="{{ route('users.update', $user->id) }}" method='POST' class="grid gap-4">
        @csrf
        @method('PUT')
        <x-jet-label for="name">Edit Users Name:
            <x-jet-input type="text" value="{{ $user->name }}" id="name" name="Name" required />
        </x-jet-label>
        <x-jet-label for="email">Edit Users Email</x-jet-label>
        <x-jet-input type="email" value="{{ $user->email }}" id="email" name="Email" required />
        @if ($id != $user->id)
            <x-jet-label for="Admin">{{ $user->is_admin ? 'Super-Admin - Set As Lecturer?' : 'Lecturer - Set As Admin?' }}
                <input type="checkbox" id="Admin" name="Admin" {{ $user->is_admin ? 'checked' : '' }}
                    value="{{ !$user->is_admin }}" />
            </x-jet-label>
        @endif
        <div class="grid cols-1"> 
            <h3>User Is Currently Assigned To: 
                @foreach ($user->papers as $p)
                    {{ $p->paper_name . ' ' }}
                @endforeach
            </h3>
            <x-jet-label for="paper">Select Papers:</x-jet-label>
            <select id="paper" name="Papers[]" multiple required
                class="block appearance-none w-min bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                @foreach ($papers as $paper)
                    <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                @endforeach
            </select>
            (For now press ctrl while clicking options to select multiple)
            <input type="hidden" value="{{ $user->id }}" id="userID" name="userID">
            <x-jet-button type='submit'>Submit</x-jet-button>
    </form>
@else
    <h2>You do not have permission to access this page</h2>
    @endrole
</div>
</x-app-layout>
