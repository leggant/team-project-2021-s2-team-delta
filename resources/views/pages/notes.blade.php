<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Student Notes</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <form action="{{ route('notes.store') }}" method="post">
                @csrf
                <label for="student">Student: </label>
                <input name="student" list="student" placeholder="Select Student" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1"/>
                <datalist id="student">
                    @foreach ($student as $student)
                        <option value={{ $student->name }} >{{ $student->name }}</option>
                    @endforeach
                </datalist>
                <textarea rows="5" name="notes" required class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 mt-8"></textarea>
                <x-jet-button>Save Note</x-jet-button>
            </form>
        </div>
    </div>
</x-app-layout>
