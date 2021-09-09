<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" />
    </div>
    <div class="mx-auto w-3/4 sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8">
        <x-student-list :students="$students" :cohorts="$cohorts"/>
    </div>
</x-app-layout>