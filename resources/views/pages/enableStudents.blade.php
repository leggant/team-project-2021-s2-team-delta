<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold capitalize">Assign Students To Studio Papers</h1>
    </x-slot>
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 gap-4 mt-8 grid-flow-row">
    @if(\Session::has('error'))
    <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" >
        <ul>
            <li class="font-bold">{!! \Session::get('error') !!}</li>
        </ul>
    </div>
    @endif
    @if(count($students) >= 1)
    <h2 class="text-4xl font-bold text-center">Inactive Student List</h2>
    <div class="bg-white shadow rounded-lg py-6 px-4 drop-shadow-2xl mx-auto w-full grid mb-6">
        @if(\Session::has('success'))
            <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
                <ul>
                    <li class="text-sm">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        <form action="{{route('enable')}}" method="POST">
            @csrf
                <table id="studentTable" class="w-full">
                    <tr>
                        <th class="px-4 py-2"></th>
                        <th class="px-4 py-2">Student Name</th>
                        <th class="px-8 py-2">Email</th>
                        <th class="px-4 py-2">Github</th>
                    </tr>
                    @foreach($students as $s)
                        <tr>
                            <td class="border py-2 px-2 text-center hover:cursor-pointer"><input type="checkbox" name="student_checkboxes[]" value="{{$s->id}}" 
                                id="checkbox_students" class="hover:cursor-pointer">
                            </td>
                            <td class="border py-2 px-2 text-center">{{$s->name}}</td>
                            <td class="border py-2 px-2 text-center">
                                <a class="hover:underline"
                                    href="mailto:{{ $s->username }}@student.op.ac.nz">{{ $s->username }}@student.op.ac.nz
                                </a>
                            </td>
                            @if ($s->github)
                                <td class="border py-2 px-2 text-center">
                                    <a class="hover:underline" href="http://github.com/{{ $s->github }}" 
                                        target="_blank">github.com/{{ $s->github }}
                                    </a>
                                </td>
                            @endif
                        </tr>   
                    @endforeach
                </table>
                <div class="grid gap-x-6 grid-cols-4 mt-6">
                    <select name="cohort" required class="col-span-2">
                        @foreach($user->papers as $up)
                        @foreach($cohorts as $cohort)
                        @if($cohort->paper_id == $up->pivot->paper_id)
                        <option value="{{$cohort->id}}">
                            {{$cohort->papers->paper_name}} | {{ date('Y', strtotime($cohort->year)) }} | {{$cohort->semester}} | Stream {{$cohort->stream}}
                        </option>
                        @endif
                        @endforeach
                        @endforeach
                    </select>
                    <x-jet-button>Transfer Selected Students</x-jet-button>
                </div>
            </form>
        </div>
    @else
        <h2 class="text-center text-3xl">All Students Have Been Assigned To A Course</h2>
        <div class="py-6 text-center">
            <form action="{{ route('home') }}" class="gap-4">
                <x-jet-button type='submit'>Back</x-jet-button>
            </form>
        </div>
    @endif
</div>
</x-app-layout>