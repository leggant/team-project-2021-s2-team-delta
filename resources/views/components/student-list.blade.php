@can('view students')
    @foreach ($user->papers as $up)
        <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-3/4 grid mb-6">
            <h1 class="text-center text-4xl mb-4">{{ $up->paper_name }}</h1>
            <table id="studentTable">
                <tr>
                    <th class="px-4 py-2">Student Name</th>
                    <th class="px-8 py-2">Email</th>
                    <th class="px-4 py-2">Github</th>
                    <th class="px-4 py-2">Course + Stream</th>
                </tr>
                @foreach ($students as $student)
                    @if ($up->pivot->paper_id == $student->cohort->paper_id)
                        <tr>
                            <td class="border py-2 cursor-pointer text-center">
                                <a class="hover:underline"
                                    href="{{ route('students.show', $student) }}">{{ $student->name }}
                                </a>
                            </td>
                            <td class="border py-2 text-center">
                                <a class="hover:underline"
                                    href="mailto:{{ $student->username }}@student.op.ac.nz">{{ $student->username }}@student.op.ac.nz
                                </a>
                            </td>
                            @if ($student->github)
                                <td class="border py-2 text-center">
                                    <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                                        target="_blank">github.com/{{ $student->github }}
                                    </a>
                                </td>
                            @endif
                            <td class="border py-2 text-center">
                                {{ $student->cohort->papers->paper_name }} | Stream
                                {{ $student->cohort->stream }}
                            </td>
                        </tr>
                    @endif
                    </tr>
                @endforeach
            </table>
        </div>
    @endforeach
@endcan
