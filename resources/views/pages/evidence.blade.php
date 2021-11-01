<x-app-layout>
    @can('upload evidence')
    <x-slot name="header">
        <h1 class="font-semibold">Student Evidence Upload</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 mt-8 xs:mx-6 grid grid-cols-2 gap-x-6 items-stretch">
        <div>
            <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div
                    class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-1 lg:grid-cols-2 grid-flow-row gap-6 py-4 px-4 drop-shadow-2xl auto-cols-auto">
                    <h2 class="lg:col-span-2 text-2xl">Student Evidence Uploads</h2>
                    <select id="student" name="student_id" aria-label="Select Student" aria-
                        class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm row-span-1'
                        required aria-multiselectable="false" value="{{ old('student') }}">
                        @foreach ($students as $s)
                        <option value="{{ $s->id }}" class='border-gray-300 focus:border-indigo-300 focus:ring 
                                focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                            {{ $s->first_name }} {{ $s->last_name }}
                        </option>
                        @endforeach
                    </select>
                    <x-jet-input type="text" name="title" id="title" value="{{ old('title') }}" required
                        aria-label="Upload Title" aria-placeholder="Enter A Upload Title"
                        placeholder="Enter A Upload Title" class="focus:placeholder-gray-400"></x-jet-input>
                    <x-jet-input type="file" name="filepath" value="filepath" id="image" dusk="image"
                        accept="image/*,.pdf,.doc,.docx,.md,.html,.zip,.sqlite,.sql,.7zip" multiple
                        class='w-full border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 place-self-center col-span-2'>
                    </x-jet-input>
                    <textarea
                        class="col-span-2 resize-none border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm focus:placeholder-gray-400 overscroll-auto"
                        name="description" id="description" cols="30" rows="5"
                        placeholder="Optional Description, Context">{{ old('description') }}</textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP
                    REQUEST --}}
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <x-jet-button>Upload Files</x-jet-button>
                </div>
            </form>
            @if ($errors->evidenceerror->any())
            <ul>
                @foreach ($errors->evidenceerror->all() as $error)
                <li class="text-red-500 list-none">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form action="{{ route('notes.store') }}" method="post">
            @csrf
            <div
                class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-1 lg:grid-cols-2 grid-flow-row gap-6 py-4 px-4 drop-shadow-2xl auto-cols-auto">
                <h2 class="lg:col-span-2 text-2xl">Student Note</h2>
                <div class="grid gap-y-2">
                    <x-jet-label for="studentnote" class="text-lg lg:col-start-1 lg:col-end-2">Select Student
                    </x-jet-label>
                    <select id="studentnote" name="student_id" required
                        class="border-gray-300 focus:border-indigo-300 focus:ring 
                    focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-start-1 lg:col-end-2">
                        @foreach ($students as $student)
                        <option value={{ $student->id }}>{{ $student->first_name }}
                            {{ $student->last_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid gap-y-2">
                    <x-jet-label for="filelink" class="text-lg lg:col-start-2 lg:col-end-3 lg:row-start-0 lg:row-end-1">
                        Optionally Enter A WebLink</x-jet-label>
                    <x-jet-input type="url" name="filelink" id="filelink" placeholder="Enter File URL"
                        aria-label="Enter File URL" aria-placeholder="Enter File URL"
                        class="focus:placeholder-gray-400 lg:col-start-2 lg:col-end-3" value="{{ old('filelink') }}">
                    </x-jet-input>
                </div>
                <textarea rows="5" name="notes" required placeholder="Enter A Note...."
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-span-2 resize-none"></textarea>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <x-jet-button>Save Note</x-jet-button>
            </div>
        </form>
    </div>
    @else
    <div>
        <h2>You do not have access to this page</h2>
    </div>
    @endcan
</x-app-layout>