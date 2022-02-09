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
@endsection