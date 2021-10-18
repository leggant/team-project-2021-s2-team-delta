@can('view students')    
        @foreach ($user->papers as $up)
        <table cellspacing="0" id="studentTable" class="table-fixed w-full">
        <h1 class="text-center py-4">{{$up->paper_name}}</h1>
        <tr>
            <th class="px-4 py-2">Student Name</th>
            <th class="px-8 py-2">Email</th>
            <th class="px-4 py-2">Github</th>
            <th class="px-4 py-2">Course + Stream</th>
        </tr>
            @foreach($students as $student)
                @if($up->pivot->paper_id == $student->cohort->paper_id)
                    <tr>
                        <td class="border px-4 py-2 cursor-pointer">
                            <a id="studentLink"
                                href="{{ route('students.show', $student) }}">{{ $student->name }}
                            </a>
                        </td>
                        <td class="border px-8 py-2"><a class="hover:underline" href="mailto:{{ $student->username }}@student.op.ac.nz">{{ $student->username }}@student.op.ac.nz</a></td>
                        @if ($student->github)
                            <td class="border px-4 py-2"><a class="hover:underline" href="http://github.com/{{ $student->github }}" target="_blank">github.com/{{ $student->github }}</td>
                        @endif
                        <td class="border px-4 py-2">{{$student->cohort->papers->paper_name}} | Stream {{$student->cohort->stream}}</td>
                    </tr>
                @endif
            </tr>
            @endforeach
        @endforeach
    </table>
@endcan
