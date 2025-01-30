@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Telepon</div>

                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input type="text" class="form-control" name="name_product" required>
                    </div>

                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" class="form-control" name="merk" required>
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>

                    <div class="form-group">
                        <label>Stock</label>
                        <input type="text" class="form-control" name="stock" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
