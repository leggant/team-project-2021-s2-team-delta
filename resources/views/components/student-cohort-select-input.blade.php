<select id="cohort" name="cohort_id" required
    class="focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block appearance-none bg-white border border-gray-400
    hover:border-gray-500 px-4 py-2 pr-8 leading-tight
    focus:outline-none focus:shadow-outline col-span-2">
    <option disabled selected>Pick a Cohort for the Student</option>
    @foreach ($cohorts as $cohort)
        @foreach($user->papers as $up)
            @if($up->pivot->paper_id == $cohort->paper_id)
                <option  value="{{ $cohort->id }}">{{ $cohort->papers->paper_name }} | Stream {{ $cohort->stream }} |
                    {{ $cohort->semester }}
                </option>
            @endif
        @endforeach
    @endforeach
</select>