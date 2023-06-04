<div>
    <div class="flex items-center justify-end gap-3 my-4" >
        <div>Total Price: <span>{{ number_format($price, 2, '.', ',') }}</span></div>
        <div>Total VAT: <span>{{ $vat }}</span></div>
        <div class="font-bold text-3xl cursor-pointer" wire:click='decreaseVat'>-</div>
        <div class="font-bold text-3xl cursor-pointer" wire:click='increaseVat'>+</div>
    </div>
    <div class="flex items-center justify-end gap-3 my-4" >
        <div>Total Charged: <span>{{ number_format($price + ($price/100 * $vat), 2, '.', ',') }}</span></div>
    </div>
    <div class="">
        @foreach ($products as $product)
            @livewire('product.single', ['product' => $product], key($product->id))
        @endforeach
    </div>
</div>
