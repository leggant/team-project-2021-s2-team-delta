    <input type="text" id="myInput" onkeyup="search()" placeholder="Search for names.." class="w-1/2">
    <table cellspacing="0" id="studentTable" class="table-fixed w-full">
            <th class="px-4 py-2" onclick="sortTable(0)">Student Name</th>
            <th class="px-8 py-2" onclick="sortTable(2)">Email</th>
            <th class="px-4 py-2" onclick="sortTable(3)">Github</th>
            <th class="px-4 py-2" onclick="sortTable(4)">Cohort + Paper</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td class="border px-4 py-2 cursor-pointer">
                    <a id="studentLink"
                        href="{{ route('students.show', $student) }}">{{ $student->name }}
                    </a>
                </td>
                <td class="border px-8 py-2">{{ $student->email }}</td>
                <td class="border px-4 py-2">{{ $student->github }}</td>
                <td class="border px-4 py-2">Studio {{ $student->cohort_id }} | {{ $student->username }}</td>
            </tr>
        @endforeach
    </table>
