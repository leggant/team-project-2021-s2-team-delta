<x-app-layout>
    @role('Super-Admin')
        <x-slot name="header">
            <h1 class="font-semibold">Studio Cohorts</h1>
        </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 grid grid-cols-2 py-10 gap-x-5">
            @can('create cohorts')
                <div>
                    <h2 class="col-span-2 text-3xl mb-4">Add a New Cohort</h2>
                    <form action="{{ route('cohorts.store') }}" method="post"
                        class="grid grid-cols-4 grid-flow-row place-content-around gap-x-2 gap-y-4 w-3/4">
                        @csrf
                        <x-jet-label for="paper" class="self-center justify-items-end col-span-1">Course</x-jet-label>
                        <select id="paper" name="paper" required
                            class="border-gray-300 focus:border-indigo-300 focus:ring 
                        focus:ring-indigo-200 focus:ring-opacity-50 
                        rounded-md shadow-sm block col-span-3 cursor-pointer">
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
                            class="border-gray-300 focus:border-indigo-300 focus:ring 
                        focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm col-span-3 cursor-pointer">
                            <option disabled selected>Select Semester</option>
                            <option value="Semester 1">Semester 1</option>
                            <option value="Semester 2">Semester 2</option>
                        </select>
                        <div class="flex gap-x-14">
                            <p class="inline-flex items-center font-medium text-lg text-gray-700">Stream: </p>
                            <div class="inline-flex gap-x-6 items-center place-self-end justify-self-stretch">
                                <x-jet-label for="streama" class="cursor-pointer">A</x-jet-label>
                                <x-jet-input type="radio" checked name="stream" value="A" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streama"/>
                                <x-jet-label for="streamb" class="cursor-pointer">B</x-jet-label>
                                <x-jet-input type="radio" name="stream" value="B" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streamb"/>
                                <x-jet-label for="streamj" class="cursor-pointer">J</x-jet-label>
                                <x-jet-input type="radio" name="stream" value="J" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streamj"/>
                            </div>
                        </div>
                        <x-jet-button class="row-start-5">Create Cohort</x-jet-button>
                    </form>
                    @if (session('error'))
                    <div class="shadow-xl backdrop-blur-lg px-4 py-4 min-w-min min-h-min">
                        <p class="text-red-600 text-xl font-bold drop-shadow-sm whitespace-nowrap text-center">{{ session('error') }}<p>
                    </div>
                    @endif
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
    @else
        <h2 class="text-center">You do not have permission to access this page</h2>
    @endrole
</x-app-layout>
