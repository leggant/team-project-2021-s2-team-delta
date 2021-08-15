<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold">Add Student</h2>
    </x-slot>
    <div class="studentForm">
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" class="formInput" required>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="formInput" required>
            <label for="id">Student Username:</label>
            <input type="text" id="id" name="username" class="formInput" required>
            <label for="mail">Student Email:</label>
            <input type="email" id="mail" name="email" class="formInput" required>
            <label for="Github">Github Username:</label>
            <input type="text" id="github" name="github" class="formInput">
            <x-jet-button>Add New Student</x-jet-button>
        </form>
    </div>
</x-app-layout>