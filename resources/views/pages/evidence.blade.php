<x-app-layout>
    @can('upload evidence')
        <x-slot name="header">
            <h1 class="font-semibold">Student Evidence Upload</h1>
        </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('evidence.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="student">Student</label>
                <select id="student" name="student">
                    <option disabled selected>Select a student</option>
                    @foreach ($student as $s)
                        <option value="{{ $s->id }}">{{ $s->first_name }} {{ $s->last_name }}</option>
                    @endforeach
                </select>
                <label for="title">Description</label>
                <input type="text" name="title" id="title" placeholder="Enter Description..." required>
                {{-- MULTIPLE ALLOWS MULTIPLE FILES TO BE UPLOADED. CHECK BACKEND CAN HANDLE THIS IN THE HTTP REQUEST --}}
                <input type="file" name="image" id="image" dusk="image" accept="image/*,.pdf,.doc,.docx,.md,.html" multiple
                    required />
                <x-jet-button>Upload Files</x-jet-button>
            </form>
        </div>
    @else
        <div>
            <h2>You do not have access to this page</h2>
        </div>
    @endcan
</x-app-layout>
