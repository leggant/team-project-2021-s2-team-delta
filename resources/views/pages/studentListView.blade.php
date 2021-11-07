<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">BIT Student List</h1>
    </x-slot>
@role('Super-Admin')
    <div class="w-full mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-x-8 mt-8 pb-6">
        <h2 class="text-center text-4xl col-span-2">Full Student List</h2>
    @foreach ($groups as $group)
    <div class="bg-white shadow rounded-lg py-6 drop-shadow-2xl w-full mb-6 mx-auto sm:px-6 lg:px-8 grid mt-8 grid-flow-row content-start max-h-min">
        @if ($loop->first)
        <h2 class="text-center text-3xl font-bold mb-4">All Active Students</h2>
        @endif
        @if ($loop->last)
        <h2 class="text-center text-3xl font-bold mb-4">All Inactive Students</h2>
        @endif
        <table dusk="student_table" class="max-h-min">
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
                                <button type="submit" dusk="student_records" class="hover:underline">{{ $s->name }}</button>
                            </form>    
                        </td>
                        <td class="border py-2 px-2 text-center">{{$s->username}}</td>
                        <td class="border py-2 px-2 text-center">
                            <a class="hover:underline hover:cursor-pointer" href="http://www.github.com/{{ $s->github }}"
                                target="_blank">{{ $s->github }}
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
    </div>
    @endforeach
    </div>
@else
    <h2>You do not have permission to access this page</h2>
@endrole
</x-app-layout>