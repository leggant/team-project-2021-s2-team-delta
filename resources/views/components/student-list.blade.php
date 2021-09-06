<div>
    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
    <table cellspacing="0" id="studentTable" class="table-fixed w-1/2">
        <tr>
            <th class="px-4 py-2" onclick="sortTable(0)">Student Name</th>
            <th class="px-4 py-2" onclick="sortTable(1)">Username</th>
            <th class="px-4 py-2" onclick="sortTable(2)">Email</th>
            <th class="px-4 py-2 w-20" onclick="sortTable(3)">Github</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="border px-4 py-2"><a id="studentLink"
                        href="{{ route('students.show', $student) }}">{{ $student->name }}
                </td></a>
                <td class="border px-4 py-2">{{ $student->username }}</td>
                <td class="border px-4 py-2">{{ $student->email }}</td>
                <td class="border px-4 py-2">{{ $student->github }}</td>
            </tr>
        @endforeach
    </table>
</div>
