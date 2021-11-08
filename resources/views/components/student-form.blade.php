@can('create students')
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <div class="grid gap-4 
        2xl:grid-cols-8 2xl:grid-rows-2 
        xl:grid-cols-8 xl:grid-rows-2 
        lg:grid-cols-4 lg:grid-rows-2
        md:grid-cols-4 md:grid-rows-1
        xmd:grid-cols-8 xmd:grid-rows-2
        sm:grid-cols-1 sm:grid-rows-6
        xs:px-2">
            <x-jet-input type="text" id="first_name" value="{{ old('first_name') }}" name="first_name"
                placeholder="Student First Name" required aria-label="Student First Name" 
                class="col-span-2"></x-jet-input>
            <x-jet-input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required
                placeholder="Student Last Name" aria-label="Student Last Name" class="col-span-2"></x-jet-input>
            <x-jet-input type="text" id="id" name="username" value="{{ old('username') }}" required
                placeholder="Student Username" aria-label="Student Username" class="col-span-2"></x-jet-input>
            <x-jet-input type="text" id="github" name="github" value="{{ old('github') }}" placeholder="Github Username"
                aria-label="Github Username" class="col-span-2"></x-jet-input>
            <x-jet-label for="cohort" class="py-1 whitespace-nowrap col-span-2">Pick a Course for the Student</x-jet-label>
            <x-student-cohort-select-input :cohorts="$cohorts" :user="$user" />
        </div>
    <div class="flex gap-x-6 mt-2 items-center xs:px-2 xl:px-0">
        <x-jet-button>Add New Student</x-jet-button>
        @if (session('status'))
        <div class="alert alert-success">
            <p class="text-bold border-green-300 text-green-600 text-xl select-none">{{ session('status') }}</p>
        </div>
        @endif
    </div>
</form>
<form action="{{route('enableView')}}" method="GET" class="xs:px-2 lg:px-0">
    <x-jet-button type="submit">Add Exisiting Students</x-jet-button>
</form>
@if ($errors->studenterror->any())
    <ul>
        @foreach ( $errors->studenterror->all() as $error)
            <li class="text-red-500 list-none">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@endcan
