<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6">
        @can('create cohorts')
            <div class="p-6">
                <form action="{{ route('cohorts.store') }}" method="post">
                    @csrf
                    <x-jet-label for="paper">Paper:
                        <select id="paper" name="paper" required
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
                            @foreach ($papers as $paper)
                                <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                            @endforeach
                        </select>
                    </x-jet-label>
                    <x-jet-label for="year">Year:
                        <x-jet-input type="text" name="year" id="year"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" />
                    </x-jet-label>
                    <x-jet-label for="semester">Semester:
                        <x-jet-input type="text" name="semester" id="semester"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" />
                    </x-jet-label>
                    <x-jet-label for="stream">Stream:
                        <x-jet-input type="text" name="stream" id="stream"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" />
                    </x-jet-label>
                    <x-jet-button class="mt-4">Create Cohort</x-jet-button>
                </form>
            </div>
        @endcan
        @can('view cohorts')
            <div>
                <table class="table-fixed max-w-3/4">
                    <thead>
                        <th class="px-4 py-2 w-15">Paper</th>
                        <th class="px-4 py-2 w-15">Year</th>
                        <th class="px-4 py-2 w-15">Semester</th>
                        <th class="px-4 py-2 w-15">Stream</th>
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
        @endcan
    </div>
</x-app-layout>
