<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" :user="$user"/>
    </div>
    <div class="mx-auto w-3/4 sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8">
        @if ($students->count() > 0)
            <x-student-list :students="$students" :cohorts="$cohorts" :user="$user"/>
        @else
            <h2 class="text-center text-3xl">There Are No Papers Currently Assigned To {{ Str::title($user->name) }}</h2>
        @endif
    </div>
    <br>
</x-app-layout>