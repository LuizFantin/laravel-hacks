@extends('layouts.app')

@section('content')
    <div class="container">

        <a href=" {{route('orders.index',['status' => 'pending'])}} " class="btn btn-warning">Pedidos pendentes</a>
        <a href=" {{route('orders.index',['status' => 'delivered'])}} " class="btn btn-success">Pedidos enviados</a>
        <a href=" {{route('orders.index',['paid' => true])}} " class="btn btn-info">Pedidos pagos</a>
        <a href=" {{route('orders.index')}} " class="btn btn-light">Todos os pedidos</a>

        <hr>

        <a href="{{route('orders.create')}} " class="btn btn-danger"> Criar Order</a>

        <hr>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Status</th>
                    <th>Paid</th>
                    <th>Track Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td> {{$order->id}} </td>
                        <td> {{$order->formatted_status}} </td>
                        <td> {{$order->formatted_paid}} </td>
                        <td> {{$order->track_code}} </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection