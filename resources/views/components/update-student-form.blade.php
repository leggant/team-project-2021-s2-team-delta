    @can('create students')
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="grid grid-cols-4 mt-4 gap-4">
            <x-jet-input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}"
                placeholder="Student First Name" required aria-label="Student First Name"></x-jet-input>

            <x-jet-input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}" required
                placeholder="Student Last Name" aria-label="Student Last Name"></x-jet-input>

            <x-jet-input type="text" id="id" name="username" value="{{ $student->username }}" required
                placeholder="Student Username" aria-label="Student Username"></x-jet-input>

            <x-jet-input type="text" id="github" name="github" value="{{ $student->github }}" placeholder="Github Username"
                aria-label="Github Username"></x-jet-input>
        </div>
            <div class="grid grid-cols-4 mt-4 mb-4 gap-4">
            {{-- <x-student-cohort-select-input :cohorts="$cohorts" :user="$user" class="col-span-2"/> --}}
            </div>
        <x-jet-button>Update Student</x-jet-button>    
    </form>

@if ($errors->studenterror->any())
    <ul>
        @foreach ( $errors->studenterror->all() as $error)
            <li class="text-red-500 list-none">{{ $error }}</li>
        @endforeach
    </ul>
@endif
@endcan