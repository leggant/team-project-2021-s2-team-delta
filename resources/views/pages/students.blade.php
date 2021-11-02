<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - BIT Student Admin</h1>
    </x-slot>
    @if(\Session::has('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
            <ul>
                <li class="text-sm">{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif
    @if(\Session::has('error'))
        <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" >
            <ul>
                <li class="font-bold">{!! \Session::get('error') !!}</li>
            </ul>
        </div>
    @endif
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" :user="$user" />
    </div>
    <div class="mx-auto sm:px-6 lg:px-8 grid w-full grid-rows-1 gap-4 mt-8">
        @if ($students->count() >= 1 && $cohorts->count() >= 1)
            <x-student-list :students="$students" :cohorts="$cohorts" :user="$user" />
        @endif
        @foreach ($user->papers as $paper)
            @if ($paper->id == 1)
                <h2 class="text-center text-3xl">There Are No Papers Currently Assigned To
                    {{ Str::title($user->name) }}
                </h2>
            @endif
            @if (count($students) == 0)
                <h2 class="text-center text-3xl">
                    There Are No Students Currently Assigned To {{ Str::title($user->name) }}
                </h2>
            @endif
        @endforeach
    </div>
</x-app-layout>
