@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="height: 80px"><h1>Customer</h1></div>

                <div class="card-body">
                  
                  @if (session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th> 
      <th scope="col">Nama Customer</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach($customer as $data)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{$data->name_customer}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->contact}}</td>
      <td>
        <form action="{{ route('customer.destroy',$data->id) }}" method="post">
          @csrf
          @method('DELETE')
        <a href="{{ route('customer.edit',$data->id) }}" class="btn btn-success">Ubah</a>
        <a href="{{ route('customer.show',$data->id) }}" class="btn btn-warning">Lihat</a>
        <button type="submit" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
        <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah</a>
        <a href="{{ route('product.index') }}" class="btn btn-secondary">Produk</a>
        <a href="{{ route('order.index') }}" class="btn btn-secondary">Order</a>
            </div>
        </div>
    </div>
</div>
@endsection
