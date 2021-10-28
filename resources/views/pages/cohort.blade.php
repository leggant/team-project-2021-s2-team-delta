<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 grid grid-cols-2 py-10 gap-x-5">
        @can('create cohorts')
        <div>
            <h2 class="col-span-2 text-3xl mb-4">Add a New Cohort</h2>
            <form action="{{ route('cohorts.store') }}" method="post" class="grid grid-cols-4 grid-flow-row place-content-around 
            gap-x-2 gap-y-4 w-3/4">
                @csrf
                <x-jet-label for="paper" class="self-center justify-items-end col-span-1">Course</x-jet-label>
                <select id="paper" name="paper" required
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block col-span-3">
                    @foreach ($papers as $paper)
                    <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                    @endforeach
                </select>
                <x-jet-label for="year" class="self-center row-start-2">
                    Year
                </x-jet-label>
                <div class="self-center col-span-2">
                    @livewire('year-form-input')
                </div>
                <x-jet-label for="semester" class="self-center col-span-1 row-start-3">Semester</x-jet-label>
                <select name="semester" id="semester"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm col-span-3">
                    <option disabled selected>Select Semester</option>
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 2">Semester 2</option>
                </select>
                @livewire('stream-inputs', ['user' => $user], key($user->id))
                <x-jet-button class="row-start-5">Create Cohort</x-jet-button>
            </form>
        </div>
        @endcan
        <div class="w-full">
            @can('view cohorts')
            @if ($cohorts->count() > 0)
            <h2 class="text-left text-2xl mb-4">Current Cohorts</h2>
            <table class="w-full">
                <thead>
                    <tr class="grid grid-cols-4">
                        <th class="px-4 py-2 text-center">Paper</th>
                        <th class="px-4 py-2 text-center">Year</th>
                        <th class="px-4 py-2 text-center">Semester</th>
                        <th class="px-4 py-2 text-center">Stream</th>
                    </tr>
                </thead>
                <tbody class="grid grid-flow-row">
                    @foreach ($cohorts as $cohort)
                    <tr class="grid grid-cols-4 content-start">
                        <td class="border px-4 py-2 text-center">{{ $cohort->papers->paper_name }}</td>
                        <td class="border px-4 py-2 text-center">{{ date('Y', strtotime($cohort->year)) }}
                        </td>
                        <td class="border px-4 py-2 text-center">{{ $cohort->semester }}</td>
                        <td class="border px-4 py-2 text-center">{{ $cohort->stream }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="text-left text-2xl">No Cohorts Have Been Created.</h2>
            @endif
            @endcan
        </div>
    </div>
</x-app-layout>