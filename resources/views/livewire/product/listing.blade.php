<div>
    <div class="">
        @foreach ($products as $product)
            @livewire('product.listing-line', ['product' => $product], key($product->id))
        @endforeach
    </div>
    <div class="flex items-center justify-end gap-3 py-4" >
        <div>Total Price: <span>{{ $price }}</span></div>
        <div>Total Quantity: <span>{{ $quantity }}</span></div>
        <div class="font-bold text-3xl cursor-pointer" wire:click='increaseQuantity'>+</div>
    </div>
</div>
