@can('view students')    
    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." class="w-1/2">
    <table cellspacing="0" id="studentTable" class="table-fixed w-full">
            <th class="px-4 py-2" onclick="sortTable(0)">Student Name</th>
            <th class="px-8 py-2" onclick="sortTable(2)">Email</th>
            <th class="px-4 py-2" onclick="sortTable(3)">Github</th>
            <th class="px-4 py-2" onclick="sortTable(4)">Course + Stream</th>
        </tr>
        @foreach ($students as $student)
            @foreach($user->papers as $up)
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
                <td class="border px-4 py-2"></td>
                {{-- <td class="border px-4 py-2">Studio {{ $student->cohort_id }} | {{ $student->year }} | {{ $student->cohort->semester }}</td> --}}
            </tr>
            @endforeach
        @endforeach
    </table>
@endcan
