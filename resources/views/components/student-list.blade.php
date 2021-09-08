<div>
    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names..">
    <table cellspacing="0" id="studentTable" class="table-fixed w-full">
        <tr>
            <th class="px-4 py-2" onclick="sortTable(0)">Student Name</th>
            <th class="px-4 py-2" onclick="sortTable(1)">Username</th>
            <th class="px-8 py-2" onclick="sortTable(2)">Email</th>
            <th class="px-4 py-2" onclick="sortTable(3)">Github</th>
            <th class="px-4 py-2" onclick="sortTable(4)">Cohort + Paper</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="border px-4 py-2"><a id="studentLink"
                        href="{{ route('students.show', $student) }}">{{ $student->name }}
                </td></a>
                <td class="border px-4 py-2">{{ $student->username }}</td>
                <td class="border px-8 py-2">{{ $student->email }}</td>
                <td class="border px-4 py-2">{{ $student->github }}</td>
                <td class="border px-4 py-2">Studio {{ $student->cohort->paper_id }} | {{ $student->cohort->year }} | {{ $student->cohort->semester }}</td>
            </tr>
        @endforeach
    </table>
</div>
