<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold capitalize">{{ $student->name }}</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8 grid grid-cols-2">
        <div>
            <h2 class="text-3xl mb-3">Profile</h2>
            <p>
                Email: <a class="hover:underline" href="mailto:{{ $student->email }}">{{ $student->email }}</a>
            </p>
            @if ($student->github)
                <p>
                    Github: <a class="hover:underline" href="http://github.com/{{ $student->github }}">github.com/{{ $student->github }}</a>
                </p>
            @endif
            <div class="mt-4">
                <h3 class="text-3xl">Evidence</h3>
                @if ($uploads->count() > 0)
                    @foreach ($uploads as $file)
                        <tr>
                            <td>
                                <a href="../public/images/{{ basename($file->image) }}">{{ $file->title }}</a>
                            </td>
                            <td class="button">
                                <form method="post" action="{{ route('evidence.destroy', $file->id) }}">
                                    @csrf
                                    @method('delete')
                                    <x-jet-danger-button>Delete</x-jet-danger-button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p class="mt-2">No files found</p>
                @endif
            </div>
        </div>
        <div>
            <h3 class="text-3xl">Notes</h3>
            <table id="studentNote">
                @foreach ($notes as $note)
                    <tr>
                        <td>
                            {{ $note->notes }}
                        </td>
                        <td>
                            <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                                @csrf
                                @method('delete')
                                <x-jet-danger-button>Delete</x-jet-danger-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
