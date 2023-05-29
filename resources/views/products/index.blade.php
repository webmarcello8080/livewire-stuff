@extends('layouts.main')

@section('title', 'Product Listing')

@section('content')
<div class="container">

    @livewire('product.listing', ['products' => $products])

</div>
@endsection