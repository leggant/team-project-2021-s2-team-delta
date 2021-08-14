@extends('layouts.main-layout')
@section('content')
    <div class="mx-auto sm:px-6 lg:px-8" style="width:50%">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <h1>{{ $student->name }}</h1>
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
                                        <!--<button class="deleteButton">Delete</button>-->
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
                                {{-- <td class="button">
                                    <form method="post" action="{{ route('notes.deleteNote', $note->id) }}">
                                        @csrf
                                        @method('delete')
                                        <!--<button class="deleteButton">Delete</button>-->
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection