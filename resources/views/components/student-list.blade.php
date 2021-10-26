@can('view students')
    @foreach ($cohorts as $cohort)
        @foreach ($user->papers as $up)
            @if ($up->pivot->paper_id == $cohort->paper_id)
                <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-3/4 grid mb-6">
                    <h1 class="text-center text-4xl mb-4">{{ $up->paper_name }} -
                        {{ date('Y', strtotime($cohort->year)) }} Stream
                        {{ $cohort->stream }}
                    </h1>
                    <table id="studentTable" class="border-collapse">
                        <thead>
                            <tr>
                                <th class="py-2">Student Name</th>
                                <th class="py-2">Email</th>
                                <th class="py-2">Github</th>
                                <th class="py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                @if ($up->pivot->paper_id == $student->cohort->paper_id)
                                    <tr>
                                        <td class="border py-2 text-center">{{ $student->name }}</td>
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
                                            <form action="{{ route('students.show', $student) }}" method="GET">
                                                @csrf
                                                <x-jet-button>Update Student</x-jet-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endforeach
    @endforeach
@endcan
