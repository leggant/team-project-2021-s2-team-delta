<div class="inline-flex gap-x-6 items-center">
    <p class="font-medium text-lg text-gray-700">Stream: </p>
    <x-jet-label for="streama">A</x-jet-label>
    <x-jet-input type="radio" name="stream" value="A" checked wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streama"/>
    <x-jet-label>B</x-jet-label>
    <x-jet-input type="radio" name="stream" value="B" wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio"></x-jet-input>
    <x-jet-label>J</x-jet-label>
    <x-jet-input type="radio" name="stream" value="J" wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio"></x-jet-input>
</div>