<x-app-layout>
    @role('Super-Admin')
        <div class="pt-6 flex justify-center gap-4 md:justify-between">
            <x-jet-button><a href="{{url('/papers')}}">Back</a></x-jet-button>
        </div>
        <br>
        <form action="{{route('papers.update', $paper->id)}}" method="POST">
            {{csrf_field()}}
            {{ method_field('PATCH') }}
            <fieldset>
                <div>
                    <input type="text" value="{{$paper->paper_name}}" id="paper_name" name="paper" required>
                </div>
                <br>
                <div>
                    <x-jet-button type="submit" name="submit">Submit</x-jet-button>
                </div>
            </fieldset>
        </form>
    @else
        <h2>You do not have permission to access this page</h2>
    @endrole
</x-app-layout>