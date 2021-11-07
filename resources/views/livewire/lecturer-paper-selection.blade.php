
<select id="paper" name="Papers[]" multiple required
class="px-4 py-3 rounded bg-white border border-gray-400 
hover:border-gray-500 shadow leading-tight focus:outline-none focus:shadow-outline form-input">
@foreach ($papers as $paper)
    @if ($paper->id == 1)
        <option value="{{ $paper->id }}" class="text-center my-2 box-border select-text" wire:click="toggleNone">{{ $paper->paper_name }}</option>
    @else
        <option value="{{ $paper->id }}" class="text-center my-2 box-border select-text" wire:click="addPaper({{ $paper->id }}, '{{  $paper->paper_name }}')">{{ $paper->paper_name }}</option>
    @endif
@endforeach
</select>