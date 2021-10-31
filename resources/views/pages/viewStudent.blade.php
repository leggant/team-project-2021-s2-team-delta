<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold capitalize">{{ $student->name }}</h1>
    </x-slot>
    <div class="max-w-7xl min-w-2xl mx-auto sm:px-8 lg:px-8 mt-8 grid grid-cols-2 gap-6">
        <div class="col-span-2 xs:px-6">
            <h2 class="text-3xl mb-3">Contact Details</h2>
            <p>
                Email: <a class="hover:underline" href="mailto:{{ $student->email }}">{{ $student->email }}</a>
            </p>
            @if ($student->github)
                <p>
                    Github: <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                        target="_blank">github.com/{{ $student->github }}</a>
                </p>
            @endif
            <x-jet-button class="mt-4">Edit</x-jet-button>
        </div>
        <div class="mt-4">
            <h3 class="text-3xl">Evidence</h3>
            @if ($uploads->count() > 0)
                @foreach ($uploads as $file)
                    <div class="grid grid-rows-2 mt-3 items-center gap-2">
                        <div class="flex gap-4">
                            <a href="{{ route('evidence.show', $file->id) }}">
                                <x-jet-button>
                                    {{ $file->title }}
                                </x-jet-button>
                            </a>
                        </div>
                        <div class="flex gap-4 space-evenly align-content-center">
                            <form method="post" action="{{ route('evidence.destroy', $file->id) }}" >
                                @csrf
                                @method('delete')
                                <x-delete-button/>
                            </form>
                            <p class="leading-relaxed py-1">Created: {{ date('d-m-Y', strtotime($file->created_at)) }}
                            </p>
                            @if ($file->created_at != $file->updated_at)
                                <p class="leading-relaxed py-1">Updated: {{ $file->updated_at->diffForHumans() }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <p class="mt-2">No files found</p>
            @endif
        </div>
        <div class="mt-4">
            <h3 class="text-3xl">Notes</h3>
            @if ($notes->count() > 0)
                @foreach ($notes as $note)
                    <div class="grid grid-rows-2 mt-3 items-center gap-2">
                        <p class="capitalize">{{ $note->notes }}</p>
                        <div class="flex gap-2 items-center">
                            <form method="#" action="#" class="self-start">
                                @csrf
                                @method('put')
                                <x-edit-button />
                            </form>
                            <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                @csrf
                                @method('delete')
                                <x-delete-button />
                            </form>
                            <p>Created: {{ date('d-m-Y', strtotime($note->created_at)) }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="mt-2">No notes found</p>
            @endif
        </div>
    </div>
    {{-- <div x-data="{ open: false }">
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
        </div> --}}
</x-app-layout>