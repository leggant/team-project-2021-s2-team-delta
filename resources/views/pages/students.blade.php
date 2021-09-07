<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - Student Admin</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-4 mt-8">
        <div>
            <x-student-form :cohorts="$cohorts" />
        </div>
        <div>
            <x-student-list :students="$students" />
        </div>
    </div>
</x-app-layout>