<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
        <label for="id">Student Username:</label>
        <input type="text" id="id" name="username" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
        <label for="mail">Student Email:</label>
        <input type="email" id="mail" name="email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
        <label for="Github">Github Username:</label>
        <input type="text" id="github" name="github" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
        <x-jet-button>Add New Student</x-jet-button>
    </form>
</div>