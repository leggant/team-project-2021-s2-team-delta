@can('create students')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        {{-- THIS REPLACES --}}
        <x-jet-label for="first_name">First Name</x-jet-label>
        <x-jet-input type="text" id="first_name" name="first_name" required></x-jet-input>
        {{-- THIS --}}
        {{-- <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required> --}}
        {{-- TO THIS --}}
        <x-jet-label for="last_name">Last Name</x-jet-label>
        <x-jet-input type="text" id="last_name" name="last_name" required></x-jet-input>
        <x-jet-label for="id">Student Username</x-jet-label>
        <x-jet-input type="text" id="id" name="username" required></x-jet-input>
        <x-jet-label for="email">Student Email</x-jet-label>
        <x-jet-input type="email" id="email" name="email" required></x-jet-input>
        <x-jet-label for="id">GitHub Username</x-jet-label>
        <x-jet-input type="text" id="github" name="github"></x-jet-input>
        <x-student-cohort-select-input :cohorts="$cohorts" />
        <x-jet-button>Add New Student</x-jet-button>
    </form>
@endcan
