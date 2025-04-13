@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Kategori</div>

                <div class="card-body">
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama Product</label>
                        <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" class="form-control" required>
                    </div>

                     <div class="form-group">
                        <label>Merk</label>
                        <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" class="form-control" required>
                    </div>

                     <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}" class="form-control" required>
                    </div>

                     <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="stock" value="{{ $product->stock }}" class="form-control" required>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
