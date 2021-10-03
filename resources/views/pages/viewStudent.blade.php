<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold capitalize">{{ $student->name }}</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 grid grid-cols-2 gap-6">
        <div class="col-span-2">
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
            <x-jet-button class="mt-4">Edit</x-jet-button>
        </div>
        <div class="mt-4">
            <h3 class="text-3xl">Evidence</h3>
            @if ($uploads->count() > 0)
                @foreach ($uploads as $file)
                    <div class="grid grid-rows-2 mt-3 items-center gap-2">
                        <div class="flex gap-4">
                            @if ($file->permitted)
                            <a href="{{ $file->url }}">
                                <x-jet-button>
                                    {{ $file->title }}
                                </x-jet-button>
                            </a>
                            @endif
                        </div>
                        <div class="flex gap-4 space-evenly align-content-center">
                            {{-- <form method="post" action="{{ route('evidence.edit', $file->id) }}" class="mx-6"> --}}
                            <form method="#" action="#" class="self-start">
                                @csrf
                                @method('put')
                                <x-edit-button />
                            </form>
                            <form method="post" action="{{ route('evidence.destroy', $file->id) }}">
                                @csrf
                                @method('delete')
                                <x-delete-button />
                            </form>
                            <p class="leading-relaxed py-1">Created: {{ date('d-m-Y', strtotime($file->created_at)) }}
                            </p>
                            @if ($file->created_at != $file->updated_at)
                                <p>Updated: {{ date('d-m-Y', strtotime($file->updated_at)) }}</p>
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
</x-app-layout>