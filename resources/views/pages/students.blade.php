<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid gap-8 mt-8 grid-flow-row pb-20">
        <x-student-form :students="$students" :user="$user" :cohorts="$cohorts" :papers="$papers" />
        <livewire:search-student :students="$students" :papers="$papers" :user="$user" :cohorts="$cohorts" />
    </div>
</x-app-layout>