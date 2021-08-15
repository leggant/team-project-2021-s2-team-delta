<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">{{ $student->name }}</h1>
    </x-slot>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <p>
                    Email: {{ $student->email }}
                </p>
                <p>
                    Github: {{ $student->github }}
                </p>
                <h3>Evidence</h3>
                <div class="table">
                    <table id="studentEvidence">
                        @foreach ($evidences as $evidence)
                            <tr>
                                <td>
                                    <a class="image-link"
                                        href="../public/images/{{ basename($evidence->image) }}">{{ $evidence->title }}</a>
                                </td>
                                <td class="button">
                                    <form method="post" action="{{ route('evidence.destroy', $evidence->id) }}">
                                        @csrf
                                        @method('delete')
                                        <x-jet-danger-button>Delete</x-jet-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <h3>Notes</h3>
                    <table id="studentEvidence">
                        @foreach ($notes as $note)
                            <tr>
                                <td>
                                    {{ $note->notes }}
                                </td>
                                <td>
                                    <form method="post" action="{{ route('notes.deleteNote', $note->id) }}">
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
        </div>
</x-app-layout>