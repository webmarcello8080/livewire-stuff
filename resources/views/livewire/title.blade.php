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
                <option >Hello</option>
                <option >Ciao</option>
                <option >Goodbye</option>
            </select>
        </label>

        <label for="mark-id">
            Esclamation mark:
            <input id="mark-id" wire:model="mark" type="checkbox" name="" id="">
        </label>

    </div>
    <form class="flex justify-center mb-6" wire:submit.prevent="resetName()" action="#">
        <input type="submit" value="Reset Title">
    </form>
</div>
