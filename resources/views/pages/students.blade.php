<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - BIT Student Admin</h1>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" :user="$user" />
    </div>
    <div class="mx-auto sm:px-6 lg:px-8 grid w-full grid-rows-1 gap-4 mt-8">
        @if ($students->count() >= 1 && $cohorts->count() >= 1)
            <x-student-list :students="$students" :cohorts="$cohorts" :user="$user" />
        @endif
        @foreach ($user->papers as $paper)
            @if ($paper->id == 1)
                <h2 class="text-center text-3xl">There Are No Papers Currently Assigned To
                    {{ Str::title($user->name) }}
                </h2>
            @endif
            @if (count($students) == 0)
                <h2 class="text-center text-3xl">
                    There Are No Students Currently Assigned To {{ Str::title($user->name) }}
                </h2>
            @endif
        @endforeach
        @foreach ($cohorts as $cohort)
        @once    
        @if (!$cohort)
            <h2 class="text-center text-3xl">
                There Are No Cohorts Set Up To Assign Students To.
            </h2>
        @endif
        @if (!$cohort->students)
        <h2 class="text-center text-3xl">
            {{ Str::title($user->name) }} Has Papers Assigned, But No Intake To Add Students To.
        </h2>
        @endif
        @endonce
        @endforeach
    </div>
</x-app-layout>
