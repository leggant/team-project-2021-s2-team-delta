<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <br>
    <form action="{{route('enable')}}" method="POST">
        {{csrf_field()}}
        <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl w-full">
            <table id="studentTable">
                <tr>
                    <th class="px-4 py-2"></th>
                    <th class="px-4 py-2">Student Name</th>
                    <th class="px-8 py-2">Email</th>
                    <th class="px-4 py-2">Github</th>
                </tr>
            @foreach($students as $s)
                <tr>
                    <td class="border py-2 px-2 text-center"><input type="checkbox" name="student_checkboxes[]" value="{{$s->id}}" 
                        id="checkbox_students" required>
                    </td>
                    <td class="border py-2 px-2 text-center">{{$s->name}}</td>
                    <td class="border py-2 px-2 text-center">
                        <a class="hover:underline"
                            href="mailto:{{ $s->username }}@student.op.ac.nz">{{ $s->username }}@student.op.ac.nz
                        </a>
                    </td>
                    @if ($s->github)
                        <td class="border py-2 px-2 text-center">
                            <a class="hover:underline" href="http://github.com/{{ $s->github }}" 
                                target="_blank">github.com/{{ $s->github }}
                            </a>
                        </td>
                    @endif
                </tr>   
            @endforeach
            </table>
            <br>
            <select name="cohort" required>
                @foreach($user->papers as $up)
                    @foreach($cohorts as $cohort)
                        @if($cohort->paper_id == $up->pivot->paper_id)
                            <option value="{{$cohort->id}}">
                                {{$cohort->papers->paper_name}} | {{$cohort->semester}} | Stream {{$cohort->stream}}
                            </option>
                        @endif
                    @endforeach
                @endforeach
            </select>
            <br>
            <br>
            <x-jet-button type="submit">Add Students</x-jet-button>
        </div>
    </form>
</x-app-layout>