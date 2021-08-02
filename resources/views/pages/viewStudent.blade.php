<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student</title>
    <link href="{{ asset('css/general-styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar-styles.css') }}" rel="stylesheet">
</head>

<body>
    @include('inc.navbar')
    <div class="mx-auto sm:px-6 lg:px-8" style="width:50%">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <h1>{{ $student->name }}</h1>
                <p>
                    Email: {{ $student->email }}
                    <br>
                    Github: {{ $student->github }}
                </p>
                <br>
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
                                <td class="button">
                                    <form method="post" action="{{ route('notes.deleteNote', $note->id) }}">
                                        @csrf
                                        @method('delete')
                                        <!--<button class="deleteButton">Delete</button>-->
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <script>
                        $(document).ready(function() {
                            $('.image-link').magnificPopup({
                                type: 'image'
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
