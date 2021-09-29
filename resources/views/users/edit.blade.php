<x-app-layout>
    <!-- Form that allows the user to edit a user -->
    @role('Super-Admin')
        <form action="{{route('users.index')}}" class="pt-6 flex justify-center gap-4 md:justify-between">
            <x-jet-button type='submit'>Back</x-jet-button>
        </form>
        <form action="{{route('users.update', $user->id)}}" method='POST'>
            @csrf
            @method('PUT')
            <fieldset>
                <div>
                    <x-jet-label for="name">Enter Name:</x-jet-label>
                    <x-jet-input type="text" value="{{$user->name}}" id="name" name="Name" required />
                </div>
                <div>
                    <x-jet-label for="email">User Email</x-jet-label>
                    <x-jet-input type="email" value="{{$user->email}}" id="email" name="Email" required />
                </div>
                @if($id != $user->id)
                    <div class="flex w-max gap-6 mt-4">
                        <x-jet-label for="Admin">{{ $user->is_admin ? 'Super-Admin' : 'Lecturer - Set As Admin?' }}
                            <input type="checkbox" id="Admin" name="Admin" 
                            {{ $user->is_admin ? 'checked' : ''}} value="{{ !$user->is_admin }}"/>
                        </x-jet-label>  
                    </div>
                @endif
                @if ($user->id != $id)
                <div class="mt-4">
                    <div>
                        <h3>Assigned</h3>
                        @foreach($user->papers as $p)
                            {{$p->paper_name}}
                        @endforeach
                    </div>
                    <label for="paper">Select Papers:</label>
                    <select id="paper" name="Papers[]" multiple {{ !$user->is_admin ? 'required' : ''}} class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        @foreach($papers as $paper)
                            <option value="{{$paper->id}}">{{$paper->paper_name}}</option>
                        @endforeach
                    </select>
                    (For now press ctrl while clicking options to select multiple)
                </div>
                @endif
                <div class="mt-4">
                    <input type="hidden" value="{{$user->id}}" id="userID" name="userID">
                    <input class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full" type='submit' name='submit' value='Submit'>
                </div>
            </fieldset>
        </form>
    @else
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>