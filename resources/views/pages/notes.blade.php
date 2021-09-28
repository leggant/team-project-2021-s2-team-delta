<x-app-layout>
    @can('create notes')
        <x-slot name="header">
            <h1 class="font-semibold">Student Notes</h1>
        </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 mt-8">
            <form action="{{ route('notes.store') }}" method="post">
                @csrf
                <x-jet-label for="student" class="text-lg">Select Student</x-jet-label>
                <select id="student" name="student" required
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-3">
                    @foreach ($student as $student)
                        <option value={{ $student->id }}>{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
                <textarea rows="5" name="notes" required placeholder="Enter A Note...."
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-8"></textarea>
                <x-jet-button class="mt-4">Save Note</x-jet-button>
            </form>
        </div>
    @else
        <div>
            <h2>You do not have access to this page</h2>
        </div>
    @endcan
</x-app-layout>
