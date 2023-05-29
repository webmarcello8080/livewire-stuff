<div>
    <div class="flex items-center justify-end gap-3" >
        <div>Total Price: <span>{{ $price }}</span></div>
        <div class="font-bold text-3xl cursor-pointer" wire:click='updatePrice'>+</div>
    </div>
    @foreach ($products as $product)
        @livewire('product.listing-line', ['product' => $product])
    @endforeach
</div>
