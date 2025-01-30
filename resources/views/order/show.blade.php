@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Order</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Product</label>
                        <select class="form-control" name="id_product">
                            <option value="{{ $product->id }}" {{ $product->id == $order->id_product ? 'selected' :'' }}>{{ $product->name_product }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{ $order->quantity }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Order Date</label>
                        <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Nama Customer</label>
                        <select class="form-control" name="id_customer">
                            <option value="{{ $customer->id }}" {{ $customer->id == $order->id_customer ? 'selected' :'' }}>{{ $customer->name_customer }}</option>
                        </select>
                    </div>

                    </div>
                    <a href="{{ route('order.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
