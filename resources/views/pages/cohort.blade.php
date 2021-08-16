<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div class="p-6">
                <form action="{{ route('pages.cohort') }}" method="post">
                    @csrf
                    <label for="subject">Subject: <input type="text" name="subject" id="subject" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="year">Year: <input type="text" name="year" id="year" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="semester">Semester: <input type="text" name="semester" id="semester" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="stream">Stream: <input type="text" name="stream" id="stream" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="students">Students:</label>
                    <textarea name="students" id="students" rows="10" cols="30" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></textarea>
                    <x-jet-button>Save</x-jet-button>
                </form>
            </div>
        </div>
        <div>
            <table class="border-gray-300 rounded-md shadow-sm block mt-1 w-full">
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