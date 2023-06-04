<div>
    <form wire:submit.prevent='save'>
        <div class="flex flex-wrap gap-6 mb-4">
            <div class="flex items-center gap-4">
                <label for="">Price</label><input wire:model='price' type="number" step=0.01 name="" id="">
            </div>
            <div class="flex items-center gap-4">
                <label for="">Size</label><input wire:model="size" type="text" name="" id="">
            </div>
            <div class="flex items-center gap-4">
                <label for="">Colour</label><input wire:model="colour" type="text" name="" id="">
            </div>
            <input class="cursor-pointer" type="submit" value="Save">
        </div>
    </form>

</div>
