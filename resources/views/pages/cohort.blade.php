<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Studio Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 grid grid-cols-2 py-10 gap-x-5">
        @can('create cohorts')
                <form action="{{ route('cohorts.store') }}" method="post" class="grid grid-cols-4 grid-flow-row place-content-around gap-x-2 gap-y-4 w-3/4">
                    @csrf
                        <x-jet-label for="paper" class="self-center justify-items-end col-span-1">Course</x-jet-label>
                        <select id="paper" name="paper" required
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block col-span-3">
                            @foreach ($papers as $paper)
                            <option value="{{ $paper->id }}">{{ $paper->paper_name }}</option>
                                {{-- @foreach($user->papers as $up)
                                    @if($up->pivot->paper_id == $paper->id)
                                    @endif
                                @endforeach --}}
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
                                <option disabled selected>Please choose a semester here...</option>
                                <option value="Semester 1">Semester 1</option>
                                <option value="Semester 2">Semester 2</option>
                            </select>
                    
                        <x-jet-label for="stream" class="self-center row-start-4 col-span-1">Stream</x-jet-label>
                        <select name="stream" id="stream" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm col-span-3">
                            <option disabled selected>Please choose a stream here...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="J">J</option>
                        </select>
                    
                    <x-jet-button class="row-start-5">Create Cohort</x-jet-button>
                </form>
        @endcan
        @can('view cohorts')
                <table class="grid grid-flow-row">
                    <thead>
                        <th class="px-4 py-2">Paper</th>
                        <th class="px-4 py-2">Year</th>
                        <th class="px-4 py-2">Semester</th>
                        <th class="px-4 py-2">Stream</th>
                    </thead>
                    <tbody>
                        @foreach ($cohorts as $cohort)
                            {{-- @foreach($user->papers as $up) --}}
                                {{-- @if($up->pivot->paper_id == $cohort->paper_id) --}}
                                    <tr>
                                        <td class="border px-4 py-2 text-center">{{ $cohort->papers->paper_name }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $cohort->year }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $cohort->semester }}</td>
                                        <td class="border px-4 py-2 text-center">{{ $cohort->stream }}</td>
                                    </tr>
                                {{-- @endif --}}
                            {{-- @endforeach --}}
                        @endforeach
                    </tbody>
                </table>
 
        @endcan
    </div>
</x-app-layout>
