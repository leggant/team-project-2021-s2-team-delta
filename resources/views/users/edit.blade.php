<x-app-layout>
    <!-- Form that allows the user to edit a user -->
    @if(Auth::check() && Auth::user()->isAdmin())
        <div>
            <a href="{{url('/users')}}">Back</a>
        </div>
        <form action="{{route('users.update', $user->id)}}" method='POST'>
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <fieldset>
                <div>
                    <h5>Enter Name:</h5>
                    <input type="text" placeholder="{{$user->name}}" id="Name" name="Name" required>
                </div>
                <br>
                <div>
                    <h5>Enter Email:</h5>
                    <input type="email" placeholder="{{$user->email}}" id="Email" name="Email" required>
                </div>
                <br>
                @if($id != $user->id)
                    <div>
                        <h5>Admin?</h5>
                        @if($user->is_admin == 1)
                            <input type="checkbox" id="Admin" name="Admin" checked>
                        @else
                            <input type="checkbox" id="Admin" name="Admin">
                        @endif
                    </div>
                @endif
                <br>
                <div>
                    <h5>Select Papers:</h5>
                    <select id="paper" name="Papers[]" multiple required class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option disabled selected>
                            @foreach($user->papers as $p)
                                Assigned: {{$p->paper_name}}
                            @endforeach
                        </option>
                        @foreach($papers as $paper)
                            <option value="{{$paper->id}}">{{$paper->paper_name}}</option>
                        @endforeach
                    </select>
                    (For now press ctrl while clicking options to select multiple)
                </div>
                <br>
                <div>
                    <input type="hidden" value="{{$user->id}}" id="userID" name="userID">
                    <input class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full" type='submit' name='submit' value='Submit'>
                </div>
            </fieldset>
        </form>
    @else
        <h2>You do not have access to this page</h2>
    @endif
</x-app-layout>