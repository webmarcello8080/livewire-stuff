<div>
    <div class="flex flex-wrap gap-6 mb-4">
        <div class="flex items-center gap-4">
            <label for="">Price</label><input wire:model='variant.price' step=0.01 type="number" name="" id="">
        </div>
        <div class="flex items-center gap-4">
            <label for="">Size</label><input wire:model="variant.size" type="text" name="" id="">
        </div>
        <div class="flex items-center gap-4">
            <label for="">Colour</label><input wire:model="variant.colour" type="text" name="" id="">
        </div>
        <div class="cursor-pointer"><span wire:click="delete">Remove This</span></div>
    </div>
</div>
