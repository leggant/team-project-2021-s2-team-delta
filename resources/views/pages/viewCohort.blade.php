<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Cohorts</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <h1>{{ $cohort->subject }}</h1>
                <p>
                    Year: {{ $cohort->year }}
                    <br>
                    Semester: {{ $cohort->semester }}
                    <br>
                    Stream: {{ $cohort->stream }}
                    <br>
                    Students: {{ $cohort->students }}
                </p>
                <br>
            </div>
        </div>
    </div>
</x-app-layout>
