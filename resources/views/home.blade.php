@extends('layouts.main')

@section('title', 'Homepage')

@section('content')
<div class="container">

    @livewire('title')
    
    <hr>

    @livewire('title-request', ['name' => 'Marcello'])
    
    <hr>  
</div>
@endsection