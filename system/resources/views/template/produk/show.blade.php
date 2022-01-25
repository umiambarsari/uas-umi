@extends('template.base')

@section('content')
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="{{ url("public/$produk->foto") }}" alt="{{$produk->foto}}" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-9 ">
            <div class="card">
              <div class="card-header">
                Detail data produk
              </div>

              <div class="card-body">
                 <h3>{{ $produk->nama }}</h3>
                 <hr>
                 <p>
                    {{ $produk->Harga_String }} |
                   Stok {{ $produk->stok }} |
                   Berat {{ $produk->berat }} Kg |
                   seller : {{ $produk->seller->username }} |
                   tanggal : {{ $produk->created_at->diffForhumans() }}
                 </p>
                 <p>
                   {!! nl2br($produk->deskripsi) !!}
                 </p>
              </div>
            </div>
        </div>
      </div>
    </div>
@endsection