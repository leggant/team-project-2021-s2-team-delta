<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @can('create cohorts')
            <div>
                <div class="p-6">
                    <form action="{{ route('cohorts.store') }}" method="post">
                        @csrf
                        <label for="paper">Paper:
                            <select id="paper" name="paper" required>
                                @foreach ($papers as $paper)
                                    <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                                @endforeach
                            </select>
                        </label><br>
                        <label for="year">Year: <input type="text" name="year" id="year"
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label>
                        <label for="semester">Semester: <input type="text" name="semester" id="semester"
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label>
                        <label for="stream">Stream: <input type="text" name="stream" id="stream"
                                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"></label>
                        <x-jet-button>Save</x-jet-button>
                    </form>
                </div>
            </div>
        @endcan
        <div>
            <table class="table-fixed w-full">
                <thead>
                    <th class="px-4 py-2">Paper</th>
                    <th class="px-4 py-2">Year</th>
                    <th class="px-4 py-2">Semester</th>
                    <th class="px-4 py-2 w-10">Stream</th>
                </thead>
                <tbody>
                    @foreach ($cohorts as $cohort)
                        <tr>
                            <td class="border px-4 py-2">Studio {{ $cohort->paper_id }}</td>
                            <td class="border px-4 py-2">{{ $cohort->year }}</td>
                            <td class="border px-4 py-2">{{ $cohort->semester }}</td>
                            <td class="border px-4 py-2">{{ $cohort->stream }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
