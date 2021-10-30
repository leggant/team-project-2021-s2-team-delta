@can('view students')
<div
    class="grid w-full 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 mb-6 mx-auto gap-x-6 gap-y-6 sm:w-full grid-flow-row justify-items-stretch items-stretch">
    @foreach ($cohorts as $cohort)
    @foreach ($user->papers as $up)
    @if ($up->pivot->paper_id == $cohort->paper_id)
    <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl content-start h-content lg:px-4">
        <h1 class="text-center text-4xl mb-4">{{ $up->paper_name }} -
            {{ date('Y', strtotime($cohort->year)) }} Stream
            {{ $cohort->stream }}
        </h1>
        <table id="studentTable" class="border-collapse w-full">
            <thead>
                <tr>
                    <th class="py-2 px-2 text-center lg:whitespace-nowrap md:whitespace-nowrap">Student Name</th>
                    <th class="py-2 px-2 text-center">Email</th>
                    <th class="py-2 px-2 text-center">Github</th>
                    <th class="py-2 px-2 text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                @if ($up->pivot->paper_id == $student->cohort->paper_id)
                <tr class="h-min-1">
                    <td class="border py-2 px-2 text-center">
                        <a class="hover:underline" href="mailto:{{ $student->username }}@student.op.ac.nz">{{
                            $student->name }}
                        </a>
                    </td>
                    <td class="border py-2 px-2 text-center">
                        <a class="hover:underline" href="mailto:{{ $student->username }}@student.op.ac.nz">{{
                            $student->username }}@student.op.ac.nz
                        </a>
                    </td>
                    <td class="border py-2 px-2 text-center">
                        @if ($student->github)
                        <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                            target="_blank">github.com/{{ $student->github }}
                        </a>
                        @endif
                    </td>
                    <td class="border py-2 px-2 text-center">
                        <form action="{{ route('students.show', $student) }}" method="GET">
                            @csrf
                            <x-jet-button>Profile</x-jet-button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    @endforeach
    @endforeach
</div>
@endcan