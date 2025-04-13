@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Customer</div>

                <div class="card-body">
                    <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data" disabled>
                        @csrf
                        @method('PUT')

                    <div class="form-group">
                        <label>Nama customer</label>
                        <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" value="{{ $customer->gender }}" class="form-control" disabled>
                    </div>

                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control" name="contact" value="{{ $customer->contact }}" class="form-control" disabled>
                    </div>

                    </div>
                    <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
