<x-app-layout>
@role('Super-Admin')
    <div class="py-6 text-center">
        <form action="{{ route('users.index') }}" class="gap-4">
            <x-jet-button dusk="back" type='submit'>Back</x-jet-button>
        </form>
    </div>
    <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-full grid mb-6">
        <table dusk="student_table">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Username</th>
                    <th class="px-4 py-2">Github</th>
                    <th class="px-8 py-2">Email</th>
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
    <h2>You do not have permission to view this page</h2>
@endrole
</x-app-layout>