<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold">Student Notes</h1>
    </x-slot>
    <form action="{{ route('pages.notes') }}" method="post" class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6">
        @csrf
        <div>
            <label for="student">Student: </label>
            <input name="student" list="student" />
            <datalist id="student">
                @foreach ($student as $student)
                    <option value={{ $student->name }}>{{ $student->name }}</option>
                @endforeach
            </datalist>
        </div>
        <h4>Notes:</h4>
        <textarea rows="5" name="notes" required></textarea>
        <x-jet-button>Save Note</x-jet-button>
    </form>
</x-app-layout>