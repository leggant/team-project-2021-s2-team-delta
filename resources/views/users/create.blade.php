<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize" class="col-span-3">BIT Studio Management - Add New User</h1>
    </x-slot>
    <!-- Form that allows user to create a new user -->
    @role('Super-Admin')
    <div class="w-max h-max mx-auto mt-8 grid pb-8">
        <livewire:create-user />
    @else
        <h2>You do not have permission to access this page</h2>
    </div>
    @endrole
</x-app-layout>
