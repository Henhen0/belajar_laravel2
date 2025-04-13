@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Customer</div>

                <div class="card-body">
                    <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" class="form-control" name="name_customer" required>
                    </div>

                    <div class="form-group">
                        <label>Gender</label><br>
                        <input type="radio" class="form-check-input" name="gender" required value="Laki-laki">Laki-Laki 
                        <input type="radio" class="form-check-input" name="gender" required value="Perempuan">Perempuan 
                    </div>
                    
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
