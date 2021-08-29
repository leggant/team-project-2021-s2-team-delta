<x-app-layout>
    @if(Auth::check() && Auth::user()->isAdmin())
    @else
        <h2>You do not have access to this page</h2>
    @endif
</x-app-layout>