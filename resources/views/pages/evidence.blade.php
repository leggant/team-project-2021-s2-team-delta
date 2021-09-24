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
                    <x-jet-input type="text" name="title" id="title" placeholder="Enter Title" required aria-label="Upload Title" aria-placeholder="Enter A Upload Title" placeholder="Enter A Upload Title" class="focus:placeholder-gray-400"></x-jet-input>
                    <select id="student" name="student" aria-label="Select Student" aria-
                        class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm row-span-1'
                        required aria-multiselectable="false">
                        <option value="ignore">Select Student</option>
                        @foreach ($student as $s)
                            <option value="{{ $s->id }}" 
                                class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                                {{ $s->first_name }} {{ $s->last_name }}</option>
                        @endforeach
                    </select>
                    <textarea class="resize-none border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm focus:placeholder-gray-400 overscroll-auto" name="description" id="description" cols="30" rows="5" placeholder="Optional Description, Context"></textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
                    <x-jet-input type="file" name="filepath" id="image" dusk="image" accept="image/*,.pdf,.doc,.docx,.md,.html"
                        multiple required class='border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 place-self-center'></x-jet-input>
                    <x-jet-button>Upload Files</x-jet-button>
                    </div>
            </form>
        </div>
    @else
        <div>
            <h2>You do not have access to this page</h2>
        </div>
    @endcan
</x-app-layout>
