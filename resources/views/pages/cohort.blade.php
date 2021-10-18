<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6">
        @can('create cohorts')
            <div class="p-6">
                <form action="{{ route('cohorts.store') }}" method="post">
                    @csrf
                    <x-jet-label for="paper">Course:
                        <select id="paper" name="paper" required
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
                            @foreach ($papers as $paper)
                                @foreach($user->papers as $up)
                                    @if($up->pivot->paper_id == $paper->id)
                                        <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                                    @endif
                                @endforeach
                            @endforeach
                        </select>
                    </x-jet-label>
                    <x-jet-label for="year">Year:
                        <x-jet-input type="text" name="year" id="year"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" />
                    </x-jet-label>
                    <x-jet-label for="semester">Semester:
                        <select name="semester" id="semester"
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
                                <option disabled selected>Please choose a semester here...</option>
                                <option value="Semester 1">Semester 1</option>
                                <option value="Semester 2">Semester 2</option>
                            </select>
                    </x-jet-label>
                    <x-jet-label for="stream">Stream:
                        <select name="stream" id="stream" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
                            <option disabled selected>Please choose a stream here...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="J">J</option>
                        </select>
                    </x-jet-label>
                    <x-jet-button class="mt-4">Create Cohort</x-jet-button>
                </form>
            </div>
        @endcan
        @can('view cohorts')
            <div class="flex justify-center">
                <table class="table-fixed w-3/4">
                    <thead>
                        <th class="px-4 py-2">Paper</th>
                        <th class="px-4 py-2">Year</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2 w-10">Stream</th>
                    </thead>
                    <tbody>
                        @foreach ($cohorts as $cohort)
                            @foreach($user->papers as $up)
                                @if($up->pivot->paper_id == $cohort->paper_id)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $cohort->papers->paper_name }}</td>
                                        <td class="border px-4 py-2">{{ $cohort->year }}</td>
                                        <td class="border px-4 py-2">{{ $cohort->semester }}</td>
                                        <td class="border px-4 py-2">{{ $cohort->stream }}</td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endcan
    </div>
</x-app-layout>
