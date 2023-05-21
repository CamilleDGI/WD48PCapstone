@extends('layouts.layouts')

@section('admin_stockrooms')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="content">
        <div class="title m-b-md">
            Stockroom List
        </div>
        
        <!-- @for($i = 0; $i < count($stockrooms); $i++)
            <p>{{ $stockrooms[$i]['stockroom_number'] }}</p>
        @endfor -->

        @foreach($stockrooms as $stockroom)
            <div class="col">
                <div class="card z-depth-0">
                    <div class="card-content center">
                       <h6>{{ $stockroom['stockroom_number'] }}</h6>
                       <p>{{ $stockroom['status'] }}</p>
                    </div>
                </div>
                <div class="cardaction right-align">
                    <a class="brand-text" href="#">more info</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection



