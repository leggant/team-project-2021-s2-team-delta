<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold">Student Evidence Upload</h2>
    </x-slot>
    <div class=evidence>
        <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="student">Student</label>
            <input name="student" list="student" placeholder="Enter Student...">
            <datalist id="student">
                @foreach ($students as $student)
                    <option value={{ $student->name }}>{{ $student->name }}</option>
                @endforeach
            </datalist>
            <label for="title">Description</label>
            <input type="text" name="title" id="title" placeholder="Enter Description..." required>
            {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
            <input type="file" name="image" accept="image/*,.pdf,.doc,.docx,.md,.html" multiple required />
            <x-jet-button>Upload Files</x-jet-button>
        </form>
    </div>
</x-app-layout>