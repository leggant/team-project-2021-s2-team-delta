<x-app-layout>
    @can('create notes')
        <x-slot name="header">
            <h1 class="font-semibold">Student Notes</h1>
        </x-slot>
            <form action="{{ route('notes.store') }}" method="post" class="w-max lg:w-1/2 lg:grid-cols-2 h-max mx-auto grid gap-3 grid-flow-row mt-8">
                @csrf
                <x-jet-label for="student" class="text-lg lg:col-start-1 lg:col-end-2">Select Student</x-jet-label>
                <select id="student" name="student" required
                    class="border-gray-300 focus:border-indigo-300 focus:ring 
                    focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-start-1 lg:col-end-2">
                    @foreach ($students as $student)
                        @foreach($user->papers as $up)
                            @if($student->cohort->papers->id == $up->pivot->paper_id)
                                <option value={{ $student->id }}>{{ $student->first_name }} {{ $student->last_name }}</option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                <x-jet-label for="filelink" class="text-lg lg:col-start-2 lg:col-end-3 lg:row-start-0 lg:row-end-1">Optionally Enter A WebLink</x-jet-label>
                <x-jet-input type="url" name="filelink" id="filelink" dusk="filelink" placeholder="Enter File URL" aria-label="Enter File URL" aria-placeholder="Enter File URL" class="focus:placeholder-gray-400 lg:col-start-2 lg:col-end-3" value="{{ old('filelink') }}"></x-jet-input>
                <textarea rows="5" name="notes" dusk="noteinput" required placeholder="Enter A Note...."
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block lg:col-span-2"></textarea>
                <x-jet-button type="submit">Save Note</x-jet-button>
            </form>
    @else
        <div>
            <h2>You do not have access to this page</h2>
        </div>
    @endcan
</x-app-layout>