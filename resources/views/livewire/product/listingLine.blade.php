<div>
    <div class="flex items-center justify-start gap-3 pb-3">
        <div class="shrink-0 w-44">{{ $product->title}}</div>
        <div class="shrink-0 w-44">{{ $product->brand}}</div>
        <div class="grow">{{ $product->description}}</div>
        <div class="shrink-0">{{ $product->price}}</div>
        <div><input type="checkbox" wire:model="checked" name="product-added" wire:click="clickPrice" id="product-{{ $product->id }}"></div>
        <div><a href="{{ route('products.edit', $product->id)}}">Edit</a></div>
    </div>
</div>
