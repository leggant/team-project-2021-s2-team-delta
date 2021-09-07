<x-app-layout>
    @if(Auth::check() && Auth::user()->isAdmin())
        <div class="pt-6 flex justify-center gap-4 md:justify-between">
            <x-jet-button><a href="{{route('admin.admin-panel')}}">Back</a></x-jet-button>
        </div>
        <br>
        <form action="{{route('roles.store')}}" method='POST' class="flex justify-center">
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <p><strong>Enter a new role name</strong></p>
                    <label><input class="form-control" type='text' name='role-name'></label><br>
                    <p><strong>Enter a guard (e.g. web)</strong></p>
                    <label><input class="form-control" type='text' name='guard-name'></label><br>
                    <p><strong>Select Permissions for the Role</strong></p>
                    <select required multiple name="permissions[]">
                        @foreach($perms as $p)
                            <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <x-jet-button type='submit' name='submit'>Add a new role</x-jet-button>
            </fieldset>
        </form>
        <br>
        <hr>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Roles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $r)
                    <tr class="text-center">
                        <td class="border px-4 py-2">{{$r->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>You do not have access to this page</h2>
    @endif
</x-app-layout>
