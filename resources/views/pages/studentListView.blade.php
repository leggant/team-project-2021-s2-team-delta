<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">BIT Student List</h1>
    </x-slot>
    @role('Super-Admin')
    <div class="w-full mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-x-8 mt-8 pb-6">
        @if(count($groups) > 1)
        <h2 class="text-center text-4xl col-span-2">Full Student List</h2>
        @else
        <h2 class="text-center text-4xl col-span-2">No Students In App</h2>
        @endif
        @foreach ($groups as $group)
        <div
            class="bg-white shadow rounded-lg py-6 drop-shadow-2xl w-full mb-6 mx-auto sm:px-6 lg:px-8 grid mt-8 grid-flow-row content-start max-h-min">
            @if ($loop->first)
            @once
            <h2 class="text-center text-3xl font-bold mb-4">All Active Students</h2>
            <table dusk="student_table_{{$loop->iteration}}" class="max-h-min">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Github</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Active?</th>
                        <th class="px-4 py-2">Current Class</th>
                    </tr>
                </thead>
                @foreach($group as $s)
                <tbody>
                    <tr>
                        <td class="border py-2 px-2 text-center">
                            <form action="{{ route('students.show', $s) }}" method="GET">
                                @csrf
                                <button type="submit" dusk="student_records" class="hover:underline">{{ $s->name
                                    }}</button>
                            </form>
                        </td>
                        <td class="border py-2 px-2 text-center">{{$s->username}}</td>
                        <td class="border py-2 px-2 text-center">
                            <a class="hover:underline hover:cursor-pointer"
                                href="http://www.github.com/{{ $s->github }}" target="_blank">{{ $s->github }}
                            </a>
                        </td>
                        <td class="border py-2 px-2 text-center hover:underline">
                            <a href="mailto:{{$s->email}}" class="hover:underline">{{$s->email}}</a>
                        </td>
                        <td class="border py-2 px-2 text-center">
                            @if($s->is_active == 1)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                        <td class="border py-2 px-2 text-center">
                            @if($s->is_active)
                            {{$s->cohort->papers->paper_name}}
                            @else
                            Not Currently in a Class
                            @endif
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @endonce
            @endif
            @if ($loop->last && $loop->iteration == 2)
            <h2 class="text-center text-3xl font-bold mb-4">All Inactive Students</h2>
            @endif
            @if ($loop->last && $loop->iteration == 2)
            <form action="{{route('enable')}}" method="POST">
                @csrf
                <table id="studentTable" class="w-full">
                    <tr>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Username</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Github</th>
                        <th class="px-4 py-2">Active?</th>
                    </tr>
                    @foreach($group as $s)
                    <tr>
                        <td class="border py-2 px-2 text-center"><input type="checkbox" name="student_checkboxes[]"
                                value="{{$s->id}}" id="checkbox_students">
                        </td>
                        <td class="border py-2 px-2 text-center">{{$s->name}}</td>
                        <td class="border py-2 px-2 text-center">{{$s->username}}</td>
                        <td class="border py-2 px-2 text-center hover:underline">
                            <a href="mailto:{{$s->email}}" class="hover:underline">{{$s->email}}</a>
                        </td>
                        <td class="border py-2 px-2 text-center">
                            @if ($s->github)
                            <a class="hover:underline" href="http://github.com/{{ $s->github }}"
                                target="_blank">github.com/{{ $s->github }}
                            </a>
                            @endif
                        </td>
                        <td class="border py-2 px-2 text-center">
                            @if($s->is_active == 1)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="mt-6 grid grid-cols-4 gap-x-6">
                    <select name="cohort" required class="col-span-2">
                        @foreach($user->papers as $up)
                        @foreach($cohorts as $cohort)
                        @if($cohort->paper_id == $up->pivot->paper_id)
                        <option value="{{$cohort->id}}">
                            {{$cohort->papers->paper_name}} | {{ date('Y', strtotime($cohort->year)) }} |
                            {{$cohort->semester}} | Stream {{$cohort->stream}}
                        </option>
                        @endif
                        @endforeach
                        @endforeach
                    </select>
                    <x-jet-button type="submit">Transfer Selected Students</x-jet-button>
                </div>
            </form>
            @endif
        </div>
        @endforeach
    </div>
    @else
    <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>