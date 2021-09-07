<div class="my-4">
    <select id="cohort" name="cohorts" required
        class="focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 appearance-none bg-white border border-gray-400
        hover:border-gray-500 px-4 py-2 pr-8 leading-tight
        focus:outline-none focus:shadow-outline w-1/2">
        <option disabled selected>Pick a Cohort for the Student</option>
        @foreach ($cohorts as $cohort)
            <option value="{{ $cohort->id }}">Studio {{ $cohort->paper_id }} | {{ $cohort->year }} |
                {{ $cohort->semester }}
            </option>
        @endforeach
    </select>
</div>