@extends('layouts.layouts')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 py-4 sm:pt-0">
    <div class="content">
        <div class="title m-b-md">
            Customer List
        </div>
        <div>
            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href="stockrooms/create">Enroll New Customer</a></button>
        </div>
        <br>
        <div class="row">
           
            <table class="border-collapse border border-slate-400 ...">
                <thead>
                    <tr>
                    <th class="border border-slate-300 ...">Customer Name</th>
                    <th class="border border-slate-300 ...">Stockroom</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td class="border border-slate-300 ...">{{ $customer['name'] }}</td>
                        <td class="border border-slate-300 ...">{{ $customer['stockroom'] }}</td>
                    </tr>
                @endforeach  
                </tbody>
                </table>
  
        </div>
    </div>
</div>

@endsection



