<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold capitalize">{{ $student->name }}</h1>
    </x-slot>
    <div class="max-w-7xl min-w-2xl mx-auto sm:px-8 lg:px-8 mt-8 grid grid-cols-2 gap-6 pb-8">
        <div class="grid gap-y-3 content-start">
            <h2 class="text-3xl">Contact Details</h2>
                <p>
                    Email: <a class="hover:underline" href="mailto:{{ $student->email }}">{{ $student->email }}</a>
                </p>
                @if($student->github)
                <p>
                    Github: <a class="hover:underline" href="http://github.com/{{ $student->github }}"
                        target="_blank">github.com/{{ $student->github }}</a>
                    </p>
                @endif
        </div>
        <div>
            <form action="{{ route('students.update',  $student->id) }}" method="POST" class="grid grid-cols-2 gap-y-2">
                @csrf
                {{ method_field('PUT') }}
                <div>
                    <x-jet-label for="edit_first_name" class="place-self-center justify-self-start">First Name
                        </x-jet-input>
                        <x-jet-input type="text" id="edit_first_name" name="first_name"
                            value="{{ $student->first_name }}" required aria-label="Student First Name"></x-jet-input>
                </div>
                <div>
                    <x-jet-label for="edit_last_name" class="place-self-center justify-self-start">Last Name
                    </x-jet-label>
                    <x-jet-input type="text" id="edit_last_name" name="last_name" value="{{ $student->last_name }}"
                        required placeholder="Student Last Name" aria-label="Student Last Name"></x-jet-input>
                </div>
                <div>
                    <x-jet-label for="edit_id" class="place-self-center justify-self-start">User Name</x-jet-label>
                    <x-jet-input type="text" id="edit_id" name="username" value="{{ $student->username }}" required
                        placeholder="Student Username" aria-label="Student Username"></x-jet-input>
                </div>
                <div>
                    <x-jet-label for="edit_github" class="place-self-center justify-self-start">Edit GitHub
                    </x-jet-label>
                    <x-jet-input type="text" id="edit_github" name="github" value="{{ $student->github }}"
                        placeholder="Github Username" aria-label="Github Username"></x-jet-input>
                </div>
                <x-jet-button class="mt-2">Update Student</x-jet-button>
            </form>
            @if(session('studentupdateerror'))
                
            @endif
        </div>
        <div class="mt-4 ">
            <h3 class="text-3xl">Evidence</h3>
            @if($uploads->count() > 0)
            @foreach($uploads as $file)
            <div class="grid grid-cols-6 mt-3 p-3 place-items-start items-center gap-2 bg-white overflow-hidden shadow rounded-lg">
                <h3 class="mt-1 col-span-6 text-xl capitalize">{{ $file->title }}</h3>
                @if($file->description)
                <p class="mt-1 col-span-6 text-lg">Description: {{ $file->description }}</p>
                @endif
                @if($file->created_at != $file->updated_at)
                <p class="leading-relaxed py-1 col-span-2">Updated:
                    {{ $file->updated_at->diffForHumans() }}</p>
                @else
                <p class="leading-relaxed py-1 col-span-2">Created:
                    {{ date('d-m-Y', strtotime($file->created_at)) }}
                </p>
                @endif
                <a href="{{ route('evidence.show', $file->id) }}" class="col-span-2">
                    <x-jet-button class="h-10 px-5">Download File</x-jet-button>
                </a>
                <form method="post" action="{{ route('evidence.destroy', $file->id) }}">
                    @csrf
                    @method('delete')
                    <button dusk="evidence_delete" class="h-10 px-5 rounded-md bg-red-600 hover:bg-red-700 text-white">Delete</button> 
                </form>
            </div>
            @endforeach
            @else
            <p class="mt-2">No files found</p>
            @endif
        </div>
        <div class="mt-4">
            <h3 class="text-3xl">Notes</h3>
            @if($notes->count() > 0)
            @foreach($notes as $note)
            <div class="grid grid-rows-2 p-3 mt-3 items-center gap-2 bg-white overflow-hidden shadow rounded-lg">
                <h3 class="mt-1 col-span-6 text-xl capitalize">{{ $note->notes }}</h3>
                <p>Created: {{ date('d-m-Y', strtotime($note->created_at)) }}</p>
                <div class="flex gap-2 items-center">
                    <form method="post" action="{{ route('notes.destroy', $note->id) }}">
                        @csrf
                        @method('delete')
                        <button dusk="notes_delete" class="h-10 px-5 rounded-md bg-red-600 hover:bg-red-700 text-white">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            @else
            <p class="mt-2">No notes found</p>
            @endif
        </div>
        <div>
            <form action="{{ route('evidence.store', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div
                    class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-1 lg:grid-cols-2 grid-flow-row gap-6 py-4 px-4 drop-shadow-2xl auto-cols-auto">
                    <h2 class="lg:col-span-2 text-2xl">Student Evidence Uploads</h2>
                    <x-jet-input type="text" name="title" id="title" value="{{ old('title') }}" required
                        aria-label="Upload Title" aria-placeholder="Enter A Upload Title"
                        placeholder="Enter A Upload Title" class="focus:placeholder-gray-400"></x-jet-input>
                    <x-jet-input type="file" name="filepath" value="filepath" id="image" dusk="image"
                        accept="image/*,.pdf,.doc,.docx,.md,.html,.zip,.sqlite,.sql,.7zip" multiple
                        class='w-full border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 place-self-center'>
                    </x-jet-input>
                    <textarea
                        class="col-span-2 resize-none border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm focus:placeholder-gray-400 overscroll-auto"
                        name="description" id="description" cols="30" rows="5"
                        placeholder="Optional Description, Context">{{ old('description') }}</textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP
                    REQUEST --}}
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <x-jet-button>Upload Files</x-jet-button>
                </div>
            </form>
        </div>
        <div>
            <form action="{{ route('notes.store') }}" method="post">
                @csrf
                <div
                    class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-1 lg:grid-cols-2 grid-flow-row gap-6 py-4 px-4 drop-shadow-2xl auto-cols-auto">
                    <h2 class="lg:col-span-2 text-2xl">Notes</h2>
                    <x-jet-label for="filelink" class="text-lg lg:col-start-1 lg:col-end-2">
                        Optionally Enter A WebLink</x-jet-label>
                    <x-jet-input type="url" name="filelink" id="filelink" placeholder="Enter File URL"
                        aria-label="Enter File URL" aria-placeholder="Enter File URL"
                        class="focus:placeholder-gray-400 lg:col-start-2 lg:col-end-3" value="{{ old('filelink') }}">
                    </x-jet-input>
                    <textarea rows="5" name="notes" required placeholder="Enter A Note...."
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-span-2"></textarea>
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <x-jet-button>Save Note</x-jet-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>