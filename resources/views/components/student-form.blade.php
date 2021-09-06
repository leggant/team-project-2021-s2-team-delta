@can('create students')
    <div>
        <form action="{{ route('students.store') }}" method="post">
            @csrf
            <h5>Cohort:</h5>
            <select id="cohort" name="cohorts" required class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option disabled selected>Pick a Cohort for the Student</option>
            @foreach($cohorts as $cohort)
                <option value="{{$cohort->id}}">Studio {{$cohort->paper_id}} | {{$cohort->year}} | {{$cohort->semester}}</option>
            @endforeach
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
            <label for="id">Student Username:</label>
            <input type="text" id="id" name="username" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
            <label for="email">Student Email:</label>
            <input type="email" id="email" name="email" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1" required>
            <label for="github">Github Username:</label>
            <input type="text" id="github" name="github" 
            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1">
            <x-jet-button>Add New Student</x-jet-button>
        </form>
    </div>
@endcan