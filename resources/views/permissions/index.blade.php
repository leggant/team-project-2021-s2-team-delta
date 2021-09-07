<x-app-layout>
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4 md:justify-between">
            <x-jet-button><a href="{{route('admin.admin-panel')}}">Back</a></x-jet-button>
        </div>
        <br>
        <form action="{{route('permissions.store')}}" method='POST' class="flex justify-center">
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <p><strong>Enter a new permission name</strong></p>
                    <label><input class="form-control" type='text' name='perm-name'></label><br>
                    <p><strong>Enter a guard (e.g. web)</strong></p>
                    <label><input class="form-control" type='text' name='guard-name'></label><br>
                </div>
                <br>
                <x-jet-button type='submit' name='submit'>Add a new permission</x-jet-button>
            </fieldset>
        </form>
        <br>
        <hr>
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Permission</th>
                </tr>
            </thead>
            <tbody>
                @foreach($perms as $p)
                    <tr class="text-center">
                        <td class="border px-4 py-2">{{$p->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>You do not have access to this page</h2>
    @endrole
</x-app-layout>
