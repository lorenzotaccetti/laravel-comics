@extends('layout.app')

@section('page-title')
    Homepage
@endsection

@section('main-content')
<div class="main-content">
    <div class="container">

        @include('components.single-comic', [
            'title' => 'Current series',
            'comics_array' => $comics_array
        ])
        
    </div>
</div>

<div class="main-nav">
    <div class="container">

        @include('components.nav')
        
    </div>
</div>
@endsection