@extends('layouts.layouts')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <div class="title m-b-md">
            Stockroom List
        </div>
        <div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="stockrooms/create">Add New Stockroom</a></button>
        </div>
        <div class="row">

        @foreach($stockrooms as $stockroom)
            <div class="col">
                <div class="card z-depth-0">
                    <div class="card-content center">
                       {{ $stockroom->name }}
                       <p>{{ $stockroom->is_active }}</p>
                    </div>
                </div>
                <div class="cardaction right-align">
                    <a class="brand-text" href="#">more info</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>

@endsection



