<div>
    <div class="flex items-center justify-start gap-3 pb-3">
        <div class="shrink-0 w-44">{{ $product->title}}</div>
        <div class="shrink-0 w-44">{{ $product->brand}}</div>
        <div class="grow">
            <textarea class=" h-16" rows="2" wire:model.debounce.500ms='description' name="product-description"></textarea>
        </div>
        <div class="shrink-0">
            <label class="flex items-center justify-start gap-3" for="product-{{ $product->id }}">
                {{ number_format($product->price, 2, '.', ',') }}
                <input type="checkbox" wire:model="checked" name="product-added" wire:click="clickPrice" id="product-{{ $product->id }}">    
            </label>
        </div>
        <div><a href="{{ route('products.edit', $product->id)}}">Edit</a></div>
        <div><span class=" cursor-pointer" wire:click="deleteProduct">X</span></div>
    </div>
</div>
