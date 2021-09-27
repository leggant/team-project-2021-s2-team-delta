<x-app-layout>
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4">
            <x-jet-button><a href="{{route('admin.admin-panel')}}">Back</a></x-jet-button>
        </div>
        <form action="{{route('papers.store')}}" method='POST' class="flex justify-center">
            {{ csrf_field() }}
            <fieldset>
                <div class="form-group">
                    <p><strong>Enter a new paper name</strong></p>
                    <label><input class="form-control" type='text' name='paper'></label><br>
                </div>
                <br>
                <x-jet-button type='submit' name='submit'>Add a new paper</x-jet-button>
            </fieldset>
        </form>
        <br>
        <hr>
        <table class="table-fixed w-3/4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2">Paper Name</th>
                    <th class="px-4 py-2 w-20">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paper as $p)
                    <tr>
                        <td class="border px-4 py-2">{{$p->paper_name}}</td>
                        <td class="border px-4 py-2">
                            <x-jet-button><a href="{{route('papers.edit', $p->id)}}" name="edit-papers">Edit</a></x-jet-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>
