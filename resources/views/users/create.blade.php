<x-app-layout>
    <!-- Form that allows user to create a new user -->
    @role('Super-Admin')
    <div class="w-max h-max mx-auto mt-8 grid">
        <livewire:create-user />
    @else
        <h2>You do not have permission to access this page</h2>
    </div>
    @endrole
</x-app-layout>
