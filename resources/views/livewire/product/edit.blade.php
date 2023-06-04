<div>
    <div class="my-6">
        <a href="{{ route('products.index') }}">See all products</a>
    </div>
    <div class="flex items-start justify-start gap-8 mb-4">
        <div class="flex items-start gap-2">
            <div class="label">Title:</div>
            <div class="value font-bold">{{ $product->title }}</div>
        </div>
        <div class="flex items-start gap-2">
            <div class="label">Brand:</div>
            <div class="value font-bold">{{ $product->brand }}</div>
        </div>
    </div>

    <div class="flex items-start justify-start gap-8 mb-4">
        <div class="flex items-start gap-2">
            <div class="label">Description:</div>
            <div class="value font-bold">{{ $product->description }}</div>
        </div>
        <div class="flex items-start gap-2">
            <div class="label">Price:</div>
            <div class="value font-bold">{{ $product->price }}</div>
        </div>
    </div>

    <div class="variants-wrapper">
        <div class="flex items-center justify-between my-4">
            <h2>Variants</h2>
            <button class="cursor-pointer" wire:click="addForm">Add New Variant</button>
        </div>
        @foreach ($variants as $variant)
            @livewire('variant.edit', ['variant' => $variant], key($variant->id ?? $variant['id']))
        @endforeach
        @foreach ($newVariants as $newVariant)
            @livewire('variant.create', ['product_id' => $product->id], key($newVariant['id']))
        @endforeach
    </div>
</div>
