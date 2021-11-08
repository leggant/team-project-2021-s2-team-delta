<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Welcome {{ Str::title($user->name) }} - BIT Student Admin</h1>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        <x-student-form :cohorts="$cohorts" :students="$students" :user="$user" />
    </div>
    @if(session()->has('success') || session()->has('error'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-rows-1 gap-4 mt-8 grid-flow-row">
        @if(\Session::has('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
            <p class="text-lg text-bold text-center">{!! \Session::get('success') !!}</p>
        </div>
        @endif
        @if(\Session::has('error'))
        <div class="bg-red-200 border-t border-b border-orange-500 text-orange-700 px-4 py-3">
            <p class="text-lg font-bold text-red-500 text-center">{!! \Session::get('error') !!}</p>
        </div>
        @endif
    </div>
    @endif
    <div class="mx-auto sm:px-6 lg:px-8 grid w-full gap-4 mt-8 pb-8 content-start ">
        @if ($students->count() >= 1 && $cohorts->count() >= 1)
            <x-student-list :students="$students" :cohorts="$cohorts" :user="$user" />
        @endif
        @foreach ($user->papers as $paper)
            @if ($paper->id == 1)
                <h2 class="text-center text-3xl">There Are No Papers Currently Assigned To
                    {{ Str::title($user->name) }}
                </h2>
            @elseif (count($students) == 0 && !$paper->id == 1)
                <h2 class="text-center text-3xl">
                    There Are No Students Currently Assigned To {{ Str::title($user->name) }}
                </h2>
            @endif
        @endforeach
    </div>
</x-app-layout>
