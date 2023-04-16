<div>
    <h1 class="text-3xl font-bold underline mb-4 text-center">{{ $greetings}} {{ Str::upper($name) }}{{ $mark ? '!' : ''}}</h1>
    <div class="flex items-center justify-center gap-4 mb-6">
        <label for="name-id">
            Change your name:
            <input id="name-id" wire:model="name" type="text">
        </label>

        <label for="greetings-id">
            Change the greeting:
            <select id="greetings-id" wire:model="greetings" name="" id="">
                @foreach ($greeting_array as $greeting)
                    <option>{{ $greeting }}</option>
                @endforeach
            </select>
        </label>

        <label for="mark-id">
            Esclamation mark:
            <input id="mark-id" wire:model="mark" type="checkbox" name="" id="">
        </label>

    </div>

    <div class="flex items-center justify-center gap-4">
        <form class="flex justify-center mb-6" wire:submit.prevent="randomValue()" action="#">
            <input type="submit" value="Random Values">
        </form>
        <button wire:click="hardReset()">Reset All!</button>
    </div>
</div>
