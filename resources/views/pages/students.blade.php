<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-rows-2 gap-6 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" :user="$user"/>
        <livewire:search-student :cohorts="$cohorts" :user="$user" />
    </div>
</x-app-layout>