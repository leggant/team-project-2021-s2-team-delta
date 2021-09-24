<x-app-layout>
    @can('upload evidence')
        <x-slot name="header">
            <h1 class="font-semibold">Student Evidence Upload</h1>
        </x-slot>
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-8">
            <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="bg-white overflow-hidden shadow rounded-lg grid grid-cols-2 gap-6 py-4 px-4 drop-shadow-2xl">
                    <x-jet-label for="student" class="">Student</x-jet-label>
                    <select id="student" name="student"
                        class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'
                        required>
                        <option value="ignore">Select Student</option>
                        @foreach ($student as $s)
                            <option value="{{ $s->id }}"
                                class='border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm'>
                                {{ $s->first_name }} {{ $s->last_name }}</option>
                        @endforeach
                    </select>
                    <x-jet-input type="text" name="title" id="title" placeholder="Enter Title" required aria-label="Upload Title" aria-placeholder="Enter A Upload Title" placeholder="Enter A Upload Title"></x-jet-input>
                    <x-jet-label for="description">Description</x-jet-label>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Optional Description, Context"></textarea>
                    {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
                    <x-jet-label for="filepath">Select File(s)</x-jet-label>
                    <x-jet-input type="file" name="filepath" id="image" dusk="image" accept="image/*,.pdf,.doc,.docx,.md,.html"
                        multiple required class='border-indigo-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-xl py-2 px-2 my-2'></x-jet-input>
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
