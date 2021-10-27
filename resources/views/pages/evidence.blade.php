<x-app-layout>
    @can('upload evidence')
        <x-slot name="header">
            <h1 class="font-semibold">Student Evidence Upload</h1>
        </x-slot>
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-8 xs:mx-6">
            <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="bg-white overflow-hidden shadow rounded-lg grid md:grid-cols-1 lg:grid-cols-2 grid-flow-row gap-6 py-4 px-4 drop-shadow-2xl auto-cols-auto">
                    <h2 class="lg:col-span-2 text-2xl">Student Evidence Uploads</h2>
                    <select id="student" name="student_id" aria-label="Select Student" aria-
                        class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm row-span-1'
                        required aria-multiselectable="false" value="{{ old('student') }}">
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
                    <x-jet-input type="text" name="title" id="title" value="{{ old('title') }}" required aria-label="Upload Title" aria-placeholder="Enter A Upload Title" placeholder="Enter A Upload Title" class="focus:placeholder-gray-400" ></x-jet-input>
                    <x-jet-input type="file" name="filepath" value="filepath" id="image" dusk="image" accept="image/*,.pdf,.doc,.docx,.md,.html,.zip,.sqlite,.sql,.7zip"
                        multiple class='w-full border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 place-self-center'></x-jet-input>
                    <textarea class="col-span-2 resize-none border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm focus:placeholder-gray-400 overscroll-auto" name="description" id="description" cols="30" rows="5" placeholder="Optional Description, Context">{{ old('description') }}</textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
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
    @else
        <div>
            <h2>You do not have access to this page</h2>
        </div>
    @endcan
</x-app-layout>
