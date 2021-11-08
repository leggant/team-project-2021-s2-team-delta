<x-app-layout>
    @can('upload evidence')
    <x-slot name="header">
        <h1 class="font-semibold">Student Evidence Upload</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto mt-8 pb-8 grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 lg:gap-x-4 md:grid-cols-1 md:gap-y-8 gap-x-6 md:px-3 xmd:gap-y-6">
            <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div
                    class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-2 lg:grid-cols-2 xmd:grid-cols-2 grid-flow-row gap-x-3 gap-y-4 py-4 px-4 drop-shadow-2xl">
                    <h2 class="lg:col-span-2 text-2xl md:col-span-2 xmd:col-span-2">Student Evidence Uploads</h2>
                    <select id="student" name="student_id" aria-label="Select Student" aria-
                        class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                        aria-multiselectable="false" value="{{ old('student') }}">
                        @foreach ($students as $s)
                            @foreach($user->papers as $up)
                                @if($up->pivot->paper_id == $s->cohort->papers->id)
                                    <option value="{{ $s->id }}" 
                                        class='border-gray-300 focus:border-indigo-300 focus:ring 
                                        focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                                        {{ $s->first_name }} {{ $s->last_name }}
                                    </option>
                                @endif
                            @endforeach
                        @endforeach
                    </select>
                    <x-jet-input type="text" name="title" id="title" dusk="title" value="{{ old('title') }}" 
                        aria-label="Upload Title" aria-placeholder="Enter A Upload Title"
                        placeholder="Enter A Upload Title" class="focus:placeholder-gray-400"></x-jet-input>
                    <x-jet-input type="file" name="filepath" value="{{ old('filepath') }}" id="image" dusk="image"
                        accept="image/*,.pdf,.doc,.docx,.md,.html,.zip,.sqlite,.sql,.7zip" multiple
                        class='w-full border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 place-self-center lg:col-span-2 md:col-span-1 xmd:col-span-2'>
                    </x-jet-input>
                    <textarea
                        class="col-span-2 resize-none border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm focus:placeholder-gray-400 overscroll-auto"
                        name="description" id="description" cols="30" rows="5"
                        placeholder="Optional Description, Context">{{ old('description') }}</textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP
                    REQUEST --}}
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    @if ($errors->evidenceerror->any())
                        <ul class="col-start-1 flex flex-wrap">
                            @foreach ($errors->evidenceerror->all() as $error)
                            <li class="text-red-500 list-none font-bold select-none">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <x-jet-button class="col-start-1" dusk="evidence_submit">Upload Files</x-jet-button>
                </div>
            </form>
        <form action="{{ route('notes.store') }}" method="post">
            @csrf
            <div
                class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-2 lg:gap-x-4 sm:gap-x-4 lg:grid-cols-2 xmd:grid-cols-2 grid-flow-row gap-y-3 py-4 px-4 drop-shadow-2xl">
                <h2 class="lg:col-span-2 md:col-span-2 xmd:col-span-2 text-2xl">Student Note</h2>
                <x-jet-label for="studentnote" class="text-lg col-start-1 md:col-span-1 xmd:col-span-2 xmd:row-start-2 xmd:col-start-1">Select Student</x-jet-label>
                    <select id="studentnote" name="student_id" required
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm lg:col-span-1 lg:col-start-1 md:col-span-1 md:col-start-1 md:self-start xmd:col-start-1">
                        @foreach ($students as $student)
                            @foreach($user->papers as $up)
                                @if($up->pivot->paper_id == $student->cohort->papers->id)
                                    <option value="{{ $student->id }}" class="border-gray-300 focus:border-indigo-300 focus:ring 
                                        focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ $student->first_name }}
                                        {{ $student->last_name }}
                                    </option>
                                @endif
                            @endforeach
                        @endforeach
                </select>
                    <x-jet-label for="filelink" class="text-lg lg:row-start-2 md:col-end-3 sm:row-start-2 xmd:col-start-2 xmd:row-start-2">
                        Optionally Enter A WebLink
                    </x-jet-label>
                    <x-jet-input type="url" name="filelink" dusk="filelink" placeholder="Enter File URL"
                        aria-label="Enter File URL" aria-placeholder="Enter File URL"
                        class="focus:placeholder-gray-400 lg:col-start-2 lg:col-end-3" value="{{ old('filelink') }}">
                    </x-jet-input>
                <textarea rows="5" name="notes" required placeholder="Enter A Note...."
                   dusk="noteinput" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-span-2 sm:col-span-2 resize-none"></textarea>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <x-jet-button dusk="notes_submit">Save Note</x-jet-button>
            </div>
        </form>
    </div>
    @else
    <div>
        <h2>You do not have access to this page</h2>
    </div>
    @endcan
</x-app-layout>