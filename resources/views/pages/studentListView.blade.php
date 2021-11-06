<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">BIT Student List</h1>
    </x-slot>
@role('Super-Admin')
    <div class="bg-white shadow rounded-lg py-6 drop-shadow-2xl w-full mb-6 max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 mt-8 grid-flow-row">
        <table dusk="student_table">
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
            @foreach($students as $s)
                <tbody>
                    <tr>
                        <td class="border py-2 px-2 text-center">{{$s->name}}</td>
                        <td class="border py-2 px-2 text-center">{{$s->username}}</td>
                        <td class="border py-2 px-2 text-center">{{$s->github}}</td>
                        <td class="border py-2 px-2 text-center">{{$s->email}}</td>
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
@else
    <h2>You do not have permission to access this page</h2>
@endrole
</x-app-layout>