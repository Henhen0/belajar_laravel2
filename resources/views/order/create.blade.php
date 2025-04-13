@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Order</div>

                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (@errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Nama Product</label>
                        <select type="text" class="form-control" name="id_product">
                        @foreach ( $product as $data)
                            <option value="{{ $data->id }}">{{ $data->name_product }}</option>
                        @endforeach
                        </select>    
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" required>
                    </div>

                    <div class="form-group">
                        <label>Order Date</label>
                        <input type="date" class="form-control" name="order_date" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Customer</label>
                        <select type="text" class="form-control" name="id_customer" required>
                        @foreach ( $customer as $data)
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
