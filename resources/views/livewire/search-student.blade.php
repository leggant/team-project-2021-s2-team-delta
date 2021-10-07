@can('view students')
    <div class="max-w-content">
        <div class="grid grid-cols-4 w-3/4">
            <x-jet-input type="search" wire:model="query" placeholder="Search Students" class="col-span-2" />
            <div class="flex justify-evenly items-center whitespace-nowrap col-span-2">
                @foreach ($searchFields as $index => $field)
                    <label
                        class="hover:cursor-pointer flex justify-evenly items-center whitespace-nowrap">{{ $labels[$index] }}
                        <input type="radio" name="field" wire:model="searchField" value="{{ $index }}"
                            class="mx-1 hover:cursor-pointer" />
                    </label>
                @endforeach
            </div>
        </div>
        <div class="grid">
            {{-- STUDENTS IS NOW A COMPLETE OBJECT WHICH CONTAINS ARRAYS FOR EACH CLASS A LECTURER --}}
            {{-- TEACHES + A LIST OF ALL STUDENTS IN EACH CLASS --}}
            {{-- THIS IS GENERATED IN THE STUDENT CONTROLLER INDEX METHOD --}}
            @foreach ($students as $i => $student)
            {{-- {{ dd($student['paper_id']);}} --}}
            {{-- {{ dd($student['paper_name']);}} --}}
            {{-- {{ dd($student['classList']);}} --}}
                <div class="bg-gray-100 rounded-md shadow-lg bg-blend-multiply gap-5" wire:key="{{ $student->id }}">
                    <h2 class="text-2xl text-center">{{ $student }}</h2>
                    <table class="table-fixed w-full shadow-inner">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Student Name</th>
                                <th class="px-8 py-2">Email</th>
                                <th class="px-4 py-2">Github</th>
                                <th class="px-4 py-2">Paper + Stream</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $i => $student)
                                <tr>
                                    <td class="border px-4 py-2 cursor-pointer">
                                        <a id="studentLink"
                                            href="{{ route('students.show', $student) }}">{{ $student->name }}
                                        </a>
                                    </td>
                                    <td class="border px-8 py-2"><a class="hover:underline"
                                            href="mailto:{{ $student->username }}@student.op.ac.nz">{{ $student->username }}@student.op.ac.nz</a>
                                    </td>
                                    @if ($student->github)
                                        <td class="border px-4 py-2"><a class="hover:underline"
                                                href="http://github.com/{{ $student->github }}"
                                                target="_blank">github.com/{{ $student->github }}
                                        </td>
                                    @else
                                        <td class="border px-4 py-2"></td>
                                    @endif
                                    @if ($cohorts->stream)
                                        <td class="border px-4 py-2">{{ $student[$i] }} | Stream
                                            {{ $cohorts[$i]->stream }}
                                        </td>
                                    @else
                                        <td class="border px-4 py-2"></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
@endcan
