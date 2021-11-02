<div class="grid gap-5">
    <div class="flex gap-12">
        <h2 class="text-3xl leading-9 text-gray-900">Create New User</h2>
        <form action="{{ route('users.index') }}" class="gap-4">
            <x-jet-button type='submit'>Back</x-jet-button>
        </form>
    </div>
    <form action="{{ route('users.store') }}" method='POST' class="grid gap-3">
        @csrf
        <x-jet-label>Enter Name:</x-jet-label>
        <x-jet-input type="text" placeholder="Enter Users Full Name Here..." id="Name" name="Name" required class="w-full" />
        <x-jet-label>Enter Email:</x-jet-label>
        <x-jet-input type="email" placeholder="Enter Email Here..." id="Email" name="Email" required class="w-full" />
        <x-jet-label>Enter Password:</x-jet-label>
        <x-jet-input type="password" placeholder="Enter Password Here..." id="Password" name="Password" required class="w-1/2" />
        <div class="flex gap-4">
            <x-jet-label for="Admin" class="text-lg text-bold cursor-pointer">Set New User As Admin</x-jet-label>
            <x-jet-input type="checkbox" id="Admin" name="is_admin" class="form-checkbox rounded text-indigo-600 px-3 py-3 cursor-pointer" />
        </div>
        <x-jet-button dusk="new_user_submit" type="submit">Submit</x-jet-button>
    </form>
</div>
