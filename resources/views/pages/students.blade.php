<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }}</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-8">
        <div>
            <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
            <table cellspacing="0" id="studentTable" class="mt-4">
                <tr>
                    <th onclick="sortTable(0)">Student Name</th>
                    <th onclick="sortTable(1)">Username</th>
                    <th onclick="sortTable(2)">Email</th>
                    <th onclick="sortTable(3)">Github</th>
                </tr>
                @foreach ($students as $student)
                    <tr>
                        <td><a id="studentLink"
                                href="{{ route('students.show', $student) }}">{{ $student->name }}
                        </td></a>
                        <td>{{ $student->username }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->github }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>