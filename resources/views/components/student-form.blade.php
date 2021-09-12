@can('create students')
<form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="grid grid-cols-4 mt-4 gap-4">
        <x-jet-input type="text" id="first_name" name="first_name" placeholder="Student First Name" required aria-label="Student First Name"></x-jet-input>
        <x-jet-input type="text" id="last_name" name="last_name" required placeholder="Student Last Name" aria-label="Student Last Name"></x-jet-input>
        <x-jet-input type="text" id="id" name="username" required placeholder="Student Username" aria-label="Student Username"></x-jet-input>
        <x-jet-input type="text" id="github" name="github" placeholder="Github Username" aria-label="Github Username"></x-jet-input>
    </div>
    <div class="grid grid-cols-4 mt-4 mb-4 gap-4">
        <x-jet-input type="email" id="email" name="email" required
            class="col-span-2" placeholder="student@student.op.ac.nz"
            aria-placeholder="Enter Student Email" aria-label="Enter Student Email"></x-jet-input>
        <x-student-cohort-select-input :cohorts="$cohorts" class="col-span-2"/>
    </div>
    <x-jet-button>Add New Student</x-jet-button>
</form>
@endcan
