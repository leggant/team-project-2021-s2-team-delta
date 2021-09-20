<x-app-layout>
    @can('view students')
        <x-slot name="header">
            <h1 class="font-semibold capitalize">{{ $student->name }}</h1>
        </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6">
                <p>
                    Email: {{ $student->email }}
                </p>
                <p>
                    Github: {{ $student->github }}
                </p>
                <h3>Evidence</h3>
                <div>
                    <table id="studentEvidence">
                        @foreach ($evidences as $evidence)
                            <tr>
                                <td>
                                    <a
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
        </div>
    @else
        <h2>You do not have permission to access this page</h2>
    @endcan
</x-app-layout>