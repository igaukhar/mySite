@extends('auth.layouts.master')
@section('title', 'Orders')

@section('content')
    <div class="col-md-12">
        <h1>Orders</h1>
        <table class="table">
            <tbody>
            <tr class="bg-secondary">
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>When sended</th>
                <th>Sum</th>
            </tr>
            @foreach($orders as $order)
            <tr class="bg-info">
                <td>{{ $order->id }}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{ $order->created_at->format('H:m:s D/M/Y') }}</td>
                <td>{{ $order->getFullPrice() }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
