<div>
    @foreach ($names as $key => $name)
        @livewire('title-request', ['name' => $name], key($key))
        - <button wire:click="removeTitle({{ $key }})">Remove this</button>
    @endforeach

    <div class=" flex justify-center items-center gap-4">
        <button wire:click="$refresh">Refresh component</button>
        {{ now() }}
    </div>
    
    <div class=" flex justify-center items-center gap-4">
        <button wire:click="newTitle('this is new')">Add New Title</button>
        {{ now() }}
    </div>
</div>
