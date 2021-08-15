<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold">Studio Cohorts</h2>
    </x-slot>
    <div class="mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <form action="{{ route('pages.cohort') }}" method="post">
                    @csrf
                    <label for="subject">Subject: <input type="text" name="subject" id="subject"></label> 
                    <label for="year">Year: <input type="text" name="year" id="year"></label> 
                    <label for="semester">Semester: <input type="text" name="semester" id="semester"></label> 
                    <label for="stream">Stream: <input type="text" name="stream" id="stream"></label> 
                    <label for="students">Students:</label>
                    <textarea name="students" id="students" rows="10" cols="30"></textarea>
                    <x-jet-button>Save</x-jet-button>
                </form>
            </div>
        </div>
        <div>
            <table>
                <thead>
                    <th>Subject</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Stream</th>
                    <th>Students</th>
                </thead>
                <tbody>
                    @foreach ($cohorts as $cohort)
                        <tr>
                            <td><a href="/cohort/{{ $cohort->id }}">{{ $cohort->subject }}</a></td>
                            <td>{{ $cohort->year }}</td>
                            <td>{{ $cohort->semester }}</td>
                            <td>{{ $cohort->stream }}</td>
                            <td>{{ $cohort->students }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>