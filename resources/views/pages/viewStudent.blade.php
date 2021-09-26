<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold capitalize">{{ $student->name }}</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 grid grid-cols-2 gap-6">
        <div>
            <h2 class="text-3xl mb-3">Profile</h2>
            <p>
                Email: <a class="hover:underline" href="mailto:{{ $student->email }}">{{ $student->email }}</a>
            </p>
            @if ($student->github)
                <p>
                    Github: <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                        target="_blank">github.com/{{ $student->github }}</a>
                </p>
            @endif
            <div class="mt-4">
                <h3 class="text-3xl">Evidence</h3>
                @if ($uploads->count() > 0)
                    @foreach ($uploads as $file)
                        <div class="flex mt-3 items-center gap-2">
                            <form action="{{ route('evidence.show', $file->id) }}" method="get">
                                @csrf
                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 
                                bg-indigo-700 border border-transparent rounded-md font-semibold text-xs text-white 
                                uppercase tracking-widest hover:bg-indigo-600 focus:outline-none 
                                focus:bg-indigo-300 focus:ring active:bg-indigo-500 
                                disabled:opacity-25 transition">{{ $file->title }}</button>
                            </form>
                            <form method="post" action="{{ route('evidence.destroy', $file->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Delete</button>
                            </form>
                            <p>Created: {{ date('d-m-Y', strtotime($file->created_at)) }}</p>
                            @if ($file->created_at != $file->updated_at)
                                <p>Updated: {{ date('d-m-Y', strtotime($file->updated_at)) }}</p>
                            @endif
                        </div>
                    @endforeach
                @else
                    <p class="mt-2">No files found</p>
                @endif
            </div>
        </div>
        <div class="w-1/2">
            <h3 class="text-3xl">Notes</h3>
            @if ($notes->count() > 0)
                @foreach ($notes as $note)
                    <div class="grid grid-rows-2 mt-3 items-center gap-2">
                        <p>{{ $note->notes }}</p>
                        <div class="flex gap-2 items-center">
                            <p>Created: {{ date('d-m-Y', strtotime($note->created_at)) }}</p>
                            <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="mt-2">No notes found</p>
            @endif
        </div>
        <div x-data="{ open: false }">
            <button x-on:click="open = ! open">Upload New Evidence</button>
            <div x-show="open">
                Add new upload form here
            </div>
        </div>
        <div x-data="{ open: false }">
            <button x-on:click="open = ! open">Create New Note</button>
            <div x-show="open">
                create new note
            </div>
        </div>
    </div>
</x-app-layout>
