@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="height: 80px"><h1>Produk</h1></div>

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
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Id Kategori</th>
      <th scope="col">Cover</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1; @endphp
    @foreach($produk as $data)
    <tr>
      <th scope="row">{{ $no++}}</th>
      <td>{{$data->nama_produk}}</td>
      <td>{{$data->harga}}</td>
      <td>{{$data->stok}}</td>
      <td>{{$data->kategori->nama_kategori}}</td>
      <td>
        <img src="{{ asset('/images/produk/' . $data->cover) }}" width="100">
      </td>
      {{-- <td>{{$data->produk->nama_produk}}</td> --}}
      <td>
        <form action="{{ route('produk.destroy',$data->id) }}" method="post">
          @csrf
          @method('DELETE')
        <a href="{{ route('produk.edit',$data->id) }}" class="btn btn-success">Ubah</a>
        <a href="{{ route('produk.show',$data->id) }}" class="btn btn-warning">Lihat</a>
        <button type="submit" class="btn btn-danger" onclick="return confrim('Apakah Anda Yakin?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
        </table>
        <a href="{{ route('produk.create') }}" class="btn btn-primary">+</a>
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Back To Kategori</a>
            </div>
        </div>
    </div>
</div>
@endsection
