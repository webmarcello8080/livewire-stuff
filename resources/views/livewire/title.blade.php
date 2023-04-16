<div>
    <h1 class="text-3xl font-bold underline mb-4 text-center">{{ $greetings}} {{ Str::upper($name) }}{{ $mark ? '!' : ''}}</h1>
    <input wire:model="mark" type="checkbox" name="" id="">
    <input wire:model="name" type="text">
    <select wire:model="greetings" name="" id="">
        <option >Hello</option>
        <option >Ciao</option>
        <option >Goodbye</option>
    </select>
    <form wire:submit.prevent="resetName('Hello again')" action="#">
        <input type="submit" value="Reset the Name">
    </form>
</div>
