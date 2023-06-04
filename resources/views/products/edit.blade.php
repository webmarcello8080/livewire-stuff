@extends('layouts.main')

@section('title', 'Product Listing')

@section('content')
<div class="container">

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
        @livewire('variant.listing')
    </div>
</div>
@endsection