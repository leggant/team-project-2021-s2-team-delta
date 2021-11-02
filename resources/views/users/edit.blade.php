<x-app-layout>
    <!-- Form that allows the user to edit a user -->
    @role('Super-Admin')
    <div class="w-max h-max mx-auto sm:px-6 mt-8 grid grid-cols-1 gap-5 pb-8">
        <div class="flex gap-12">
            <h2 class="text-3xl leading-9 text-gray-900">Update {{ Str::title($user->name) }}</h2>
            <form action="{{ route('users.index') }}" class="gap-4">
                <x-jet-button dusk="back" type='submit'>Back</x-jet-button>
            </form>
        </div>
        <form action="{{ route('users.update', $user->id) }}" method='POST' class="grid gap-y-4 grid-cols-1">
            @csrf
            @method('PUT')
            <div>
                <x-jet-label for="name" class="text-lg">Edit Name:</x-jet-label>
                <x-jet-input type="text" value="{{ $user->name }}" id="name" name="Name" required class="w-full"/>
            </div>
            <div>
                <x-jet-label for="email" class="text-lg">Edit Email</x-jet-label>
                <x-jet-input type="email" value="{{ $user->email }}" id="email" name="Email" required class="w-full" />
            </div>
            @if ($id != $user->id)
                <x-jet-label for="Admin">
                    {{ $user->is_admin ? 'Super-Admin - Set As Lecturer?' : 'Lecturer - Set As Admin?' }}
                    <input type="checkbox" id="Admin" name="Admin" {{ $user->is_admin ? 'checked' : '' }}
                        value="{{ !$user->is_admin }}" />
                </x-jet-label>
            @endif
                <h3 class="text-2xl">{{ Str::title($user->name)  }} Is Currently Assigned To</h3>
                <ul class="flex gap-4">
                    @foreach ($user->papers as $p)
                       <li class="text-lg">{{ $p->paper_name}}</li> 
                    @endforeach
                </ul>
                <x-jet-label for="paper">Select Papers:</x-jet-label>
                <select id="paper" name="Papers[]" multiple required
                    class="px-4 py-3 rounded bg-white border border-gray-400 
                    hover:border-gray-500 shadow leading-tight focus:outline-none focus:shadow-outline form-input">
                    @foreach ($papers as $paper)
                        <option value="{{ $paper->id }}" class="text-center my-2 box-border select-text">{{ $paper->paper_name }}</option>
                    @endforeach
                </select>
                (For now press ctrl while clicking options to select multiple)
                <input type="hidden" value="{{ $user->id }}" id="userID" name="userID">
                <x-jet-button dusk="edit_submit" type='submit'>Submit</x-jet-button>
        </form>

    @else
        <h2>You do not have permission to access this page</h2>
        @endrole
    </div>
</x-app-layout>
