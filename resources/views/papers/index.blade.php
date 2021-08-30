<x-app-layout>
    @if(Auth::check() && Auth::user()->isAdmin())
        <form action="{{route('papers.store')}}" method='POST'>
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
        <hr>
        <table class="table-fixed w-full">
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
                            <!--<form action="{{route('papers.destroy', $p->id)}}" method="POST">       
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <x-jet-danger-button type="submit" name="delete">Delete</x-jet-danger-button>
                            </form>-->
                            <x-jet-button><a href="{{route('papers.edit', $p->id)}}" name="edit-papers">Edit</a></x-jet-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>You do not have access to this page</h2>
    @endif
</x-app-layout>
