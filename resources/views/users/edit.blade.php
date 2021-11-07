<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">BIT User Update</h1>
    </x-slot>
    <!-- Form that allows the user to edit a user -->
    @role('Super-Admin')
    <div class="w-max h-max mx-auto sm:px-6 mt-8 grid grid-cols-1 gap-5 pb-8">
            <h2 class="text-3xl leading-9 text-gray-900">Update {{ Str::title($user->name) }}</h2>
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
            <div class="flex gap-x-4 content-center">
                <x-jet-label for="Admin">
                    {{ $user->is_admin ? 'Super-Admin - Set As Lecturer?' : 'Lecturer - Set As Admin?' }}
                </x-jet-label>
                <input type="checkbox" id="Admin" name="Admin" {{ $user->is_admin ? 'checked' : '' }}
                        value="{{ !$user->is_admin }}" 
                        class="px-2 py-2 hover:cursor-pointer hover:border-indigo-500 hover:ring-indigo-300 place-self-center"/>
            </div>
            @endif
                <h3 class="text-2xl">{{ Str::title($user->name)  }} Is Currently Assigned To</h3>
                <ul class="flex gap-4">
                    @foreach ($user->papers as $p)
                       <li class="text-lg">{{ $p->paper_name}}</li> 
                    @endforeach
                </ul>
                <x-jet-label for="paper">Select Papers:</x-jet-label>
                @livewire('lecturer-paper-selection', ['papers' => $papers, 'user' => $user], key($user->id))
                (For now press ctrl while clicking options to select multiple)
                <input type="hidden" value="{{ $user->id }}" id="userID" name="userID">
                <x-jet-button dusk="edit_submit" type='submit'>Submit</x-jet-button>
        </form>

    @else
        <h2>You do not have permission to access this page</h2>
        @endrole
    </div>
</x-app-layout>
