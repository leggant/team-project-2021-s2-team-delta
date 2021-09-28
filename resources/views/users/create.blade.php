<x-app-layout>
    <!-- Form that allows user to create a new user -->
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4">
            <x-jet-button><a href="{{url('/users')}}">Back</a></x-jet-button>
        </div>
        <br>
        <div class="flex justify-center">
            <form action="{{route('users.store')}}" method='POST'>
                {{csrf_field()}}
                <fieldset>
                    <div>
                        <h5>Enter Name:</h5>
                        <input type="text" placeholder="Enter Name Here..." id="Name" name="Name" required>
                    </div>
                    <br>
                    <div>
                        <h5>Enter Email:</h5>
                        <input type="email" placeholder="Enter Email Here..." id="Email" name="Email" required>
                    </div>
                    <br>
                    <div>
                        <h5>Enter Password:</h5>
                        <input type="password" placeholder="Enter Password Here..." id="Password" name="Password" required>
                    </div>
                    <br>
                    <div>
                        <h5>Admin?</h5>
                        <input type="checkbox" id="Admin" name="Admin">
                    </div>
                    <br>
                    <div>
                        <input class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full" type='submit' name='submit' value='Submit'>
                    </div>
                </fieldset>
            </form>
        </div>
    @else
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>