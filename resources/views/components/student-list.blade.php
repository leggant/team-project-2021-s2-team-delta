@can('view students')
    @php $oldcount = 0; @endphp
    @php $newcount = 1; @endphp
<div class="grid w-full 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 mb-6 mx-auto gap-x-6 gap-y-6 sm:w-full grid-flow-row justify-items-stretch items-stretch">
    @foreach($user->papers as $up)
        @foreach ($cohorts as $cohort)
            @if($up->pivot->paper_id == $cohort->paper_id)
                <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-full grid mb-6">
                    <details class="py-4">
                        <summary dusk="dropdown"><h1 class="text-center text-4xl mb-4">{{ $cohort->papers->paper_name  }} | {{ date('Y', strtotime($cohort->year)) }} | {{$cohort->semester}} | Stream {{$cohort->stream}}</h1></summary>
                        <table id="studentTable">
                            <tr>
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2">Student Name</th>
                                <th class="px-8 py-2">Email</th>
                                <th class="px-4 py-2">Github</th>
                                <th class="px-4 py-2">Course + Stream</th>
                            </tr>
                            @foreach ($students as $student)
                                    @if ($cohort->id == $student->cohort_id)
                                        @if($student->is_active)
                                            <tr>
                                            <td class="border py-2 px-2 text-center"><input type="checkbox" name="student_checkboxes[]" value="{{$student->id}}" 
                                                id="checkbox_students" required>
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
                                                        <x-jet-button type="submit" dusk="student_records">View Student Records</x-jet-button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endif
                            @endforeach
                        </table>
                        <div class="pt-6 text-center">
                            <form id="disable" action="{{route('disable')}}" method="POST">
                                @csrf
                                <input type="hidden" name="students_selected" value="" id="hidden_students">
                                <x-jet-danger-button onclick="disable()">Remove Selected Students</x-jet-danger-button>
                            </form>
                            <br>
                            <form id="move" action="{{route('move')}}" method="POST">
                                @csrf
                                <input type="hidden" name="students_selected" value="" id="{{$oldcount}}">
                                <select name="cohort" required>
                                    @foreach($cohorts as $cohort)
                                        <option value="{{$cohort->id}}">
                                            {{$cohort->papers->paper_name}} | {{ date('Y', strtotime($cohort->year)) }} | {{$cohort->semester}} | {{$cohort->stream}}
                                        </option>
                                    @endforeach
                                </select>
                                <x-jet-button onclick="move({{$oldcount}})">Move Selected Students</x-jet-button>
                            </form>
                        </div>
                        @php $oldcount = $newcount; @endphp
                        @php $newcount = $newcount + 1; @endphp
                    </details>
                </div>
            @endif
        @endforeach
    @endforeach
</div>
@endcan