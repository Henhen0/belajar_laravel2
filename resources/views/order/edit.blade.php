@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Order</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label>Nama Product</label>
                        <select type="text" class="form-control" name="id_product" required>
                            <option value="{{ $product->id }}">{{ $product->name_product }}</option>
                        @foreach ( $allproduct as $data)
                            <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                        @endforeach
                        </select>    
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="{{ $order->quantity }}" required>
                    </div>

                    <div class="form-group">
                        <label>Order Date</label>
                        <input type="date" class="form-control" name="order_date" value="{{ $order->order_date}}" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Customer</label>
                        <select type="text" class="form-control" name="id_customer" required>
                            <option value="{{ $customer->id }}">{{ $customer->name_customer }}</option>
                        @foreach ( $allcustomer as $data)
                            <option value="{{ $data->id }}">{{ $data->name_customer }}</option>
                        @endforeach
                        </select>    
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
