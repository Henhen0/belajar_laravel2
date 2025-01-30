@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Product</div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama product</label>
                        <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="stock" value="{{ $product->stock }}" class="form-control" disabled>
                    </div>

                    </div>
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
