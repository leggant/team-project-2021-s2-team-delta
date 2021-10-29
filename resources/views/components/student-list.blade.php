@can('view students')
    @foreach ($user->papers as $up)
        <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-full grid mb-6">
            <details class="py-4">
                <summary><h1 class="text-center text-4xl mb-4">{{ $up->paper_name }}</h1></summary>
                <table id="studentTable">
                    <tr>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2">Student Name</th>
                        <th class="px-8 py-2">Email</th>
                        <th class="px-4 py-2">Github</th>
                        <th class="px-4 py-2">Course + Stream</th>
                    </tr>
                    @foreach ($students as $student)
                        @if ($up->pivot->paper_id == $student->cohort->paper_id)
                            <tr>
                            <td class="border py-2 px-2 text-center"><input type="checkbox" name="student_checkboxes[]" value="{{$student->id}}">
                            </td>
                                <td class="border py-2 px-2 text-center">
                                    {{$student->name}}
                                </td>
                                <td class="border py-2 px-2 text-center">
                                    <a class="hover:underline"
                                        href="mailto:{{ $student->username }}@student.op.ac.nz">{{ $student->username }}@student.op.ac.nz
                                    </a>
                                </td>
                                @if ($student->github)
                                    <td class="border py-2 px-2 text-center">
                                        <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                                            target="_blank">github.com/{{ $student->github }}
                                        </a>
                                    </td>
                                @endif
                                <td class="border py-2 px-2 text-center">
                                    {{ $student->cohort->papers->paper_name }} | Stream
                                    {{ $student->cohort->stream }}
                                </td>
                                <td class="py-2 px-12 text-center">
                                    <form action="{{ route('students.show', $student) }}" method="GET">
                                        @csrf
                                        <x-jet-button type="submit">View Student Records</x-jet-button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                <div class="pt-6 text-center">
                    <form action="{{route('disable')}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="students_selected[]" value="">
                        <x-jet-danger-button name="delete" value="Delete" type="submit">Remove Selected</x-jet-danger-button>
                    </form>
                </div>
            </details>
        </div>
    @endforeach
@endcan
