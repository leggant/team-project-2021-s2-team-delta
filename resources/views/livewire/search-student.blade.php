@can('view students')
    <div>
        <div class="grid grid-cols-4 w-3/4">
            <x-jet-input type="search" wire:model="query" placeholder="Search Students" class="col-span-2" />
            <div class="flex justify-evenly items-center whitespace-nowrap col-span-2">
                @foreach ($searchFields as $index => $field)
                    <label class="hover:cursor-pointer flex justify-evenly items-center whitespace-nowrap">{{ $labels[$index] }}
                        <input type="radio" name="field"
                            wire:model="searchField" 
                            value="{{ $index }}" 
                            class="mx-1 hover:cursor-pointer" />
                    </label>
                @endforeach
            </div>
        </div>
        <table class="table-fixed w-full mt-5">
            <tr>
                <th class="px-4 py-2">Student Name</th>
                <th class="px-8 py-2">Email</th>
                <th class="px-4 py-2">Github</th>
                <th class="px-4 py-2">Paper + Stream</th>
            </tr>
            @foreach ($students as $student)
                @foreach ($user->papers as $up)
                    <tr>
                        <td class="border px-4 py-2 cursor-pointer">
                            <a id="studentLink" href="{{ route('students.show', $student) }}">{{ $student->name }}
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
                        @if ($up->pivot->paper_id == $student->cohort->paper_id)
                            <td class="border px-4 py-2">{{ $student->cohort->papers->paper_name }} | Stream
                                {{ $student->cohort->stream }}
                            </td>
                        @else
                            <td class="border px-4 py-2"></td>
                        @endif
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
@endcan
