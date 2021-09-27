<x-app-layout>
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4">
            <x-jet-button><a href="{{route('admin.admin-panel')}}">Back</a></x-jet-button>
        </div>
        <br>
        <div class="flex justify-center">
            <table class="table-fixed w-3/4">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Paper Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paper as $p)
                        <tr>
                            <td class="text-center border px-4 py-2">{{$p->subject}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>
