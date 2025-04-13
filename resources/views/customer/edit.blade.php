@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Customer</div>

                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama customer</label>
                        <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}" class="form-control" required>
                    </div>

                     <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{ $customer->gender }}" class="form-control" required>
                    </div>

                     <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" value="{{ $customer->contact }}" class="form-control" required>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
