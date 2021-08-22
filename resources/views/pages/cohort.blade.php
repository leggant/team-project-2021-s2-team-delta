<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div>
            <div class="p-6">
                <form action="{{ route('cohort.store') }}" method="post">
                    @csrf
                    <label for="paper">Paper:
                        <select id="paper" name="paper" required>
                            @foreach($papers as $paper)
                                <option value="{{$paper->id}}">{{$paper->paper_name}}</option>
                            @endforeach
                        </select>
                    </label> 
                    <label for="year">Year: <input type="text" name="year" id="year" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="semester">Semester: <input type="text" name="semester" id="semester" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <label for="stream">Stream: <input type="text" name="stream" id="stream" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label> 
                    <x-jet-button>Save</x-jet-button>
                </form>
            </div>
        </div>
        <div>
            <table class="border-gray-300 rounded-md shadow-sm block mt-1 w-full">
                <thead>
                    <th>Paper</th>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>Stream</th>
                </thead>
                <tbody>
                    @foreach ($cohorts as $cohort)
                        <tr>
                            <td>Studio {{ $cohort->paper_id }}</td>
                            <td>{{ $cohort->year }}</td>
                            <td>{{ $cohort->semester }}</td>
                            <td>{{ $cohort->stream }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>