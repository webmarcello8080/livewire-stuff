@extends('layouts.main')

@section('title', 'Product Listing')

@section('content')
<div class="container">

    @livewire('product.edit', ['product' => $product])

</div>
@endsection