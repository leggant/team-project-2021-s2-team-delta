<div class="flex gap-x-14">
    <p class="inline-flex items-center font-medium text-lg text-gray-700">Stream: </p>
    <div class="inline-flex gap-x-6 items-center place-self-end justify-self-stretch">
        <x-jet-label for="streama" class="cursor-pointer">A</x-jet-label>
        <x-jet-input type="radio" name="stream" value="A" wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streama"/>
        <x-jet-label for="streamb" class="cursor-pointer">B</x-jet-label>
        <x-jet-input type="radio" name="stream" value="B" wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streamb"/>
        <x-jet-label for="streamj" class="cursor-pointer">J</x-jet-label>
        <x-jet-input type="radio" name="stream" value="J" wire:model="streampick" class="cursor-pointer focus:ring focus:text-indigo-800 p-2 border-indigo-400 text-indigo-400 form-radio" id="streamj"/>
    </div>
</div>