<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Student Evidence Upload</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="student">Student</label>
            <input name="student" id="studentname" dusk="studentname" list="student" placeholder="Enter Student...">
            <datalist id="student">
                @foreach ($student as $student_name)
                    <option value="{{ $student_name->first_name }} {{ $student_name->last_name }}"></option>
                @endforeach
            </datalist>
            <label for="title">Description</label>
            <input type="text" name="title" id="title" placeholder="Enter Description..." required>
            {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
            <input type="file" name="image" id="image" dusk="image" accept="image/*,.pdf,.doc,.docx,.md,.html" multiple required />
            <x-jet-button>Upload Files</x-jet-button>
        </form>
    </div>
</x-app-layout>