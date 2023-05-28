@extends('layouts.layouts')

@section('content')
<div class="relative flex items-top justify-center full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Stockroom - {{$stockroom->name}}</h1>
            <p>Status - {{$stockroom->is_active}}</p>
            <a href="#">Return</a>
        </div>

    </div>
</div>

@endsection



