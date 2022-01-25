<?php  

namespace App\Http\Controllers;

use App\Models\Product;

// use App\Models\Produk;

class ProdukController extends Controller {
  function index(){
    $user = request()->user();
    $data['list_produk']= $user->product;
    return view('template.produk.index', $data);
  }

  function create(){
    return view('template.produk.create');
  }

  function store (){
    $produk = new Product();
    $produk->id_user = request()->user()->id;
    $produk->nama = request('nama');
    $produk->stok = request('stok');
    $produk->foto = request('foto');
    $produk->harga = request('harga');
    $produk->berat = request('berat');
    $produk->deskripsi = request('deskripsi');
    $produk->save();

    $produk->handleUploadFoto();

    return redirect('admin/produk')->with('success','berhasil di tambahkan' );
  }

  function show(Product $produk){
    $data['produk']=$produk;
    return view('template.produk.show', $data);
  }

  function edit(Product $produk){
    $data['produk']= $produk;
    return view('template.produk.edit', $data);
  }

  function update(Product $produk){
    $produk->nama = request('nama');
    $produk->stok = request('stok');
    $produk->harga = request('harga');
    $produk->berat = request('berat');
    $produk->deskripsi = request('deskripsi');
    $produk->save();

    $produk->handleUploadFoto();

    return redirect('admin/produk')->with('success','berhasil di Edit' );
  }

  function destroy(Product $produk){
    $produk->handleDelete();
    $produk->delete();
    return redirect('admin/produk')->with('danger','berhasil di hapus' );
  }

  function filter (){

    // where
    $nama= request('nama');
    $data['nama']= $nama;

     $data['list_produk'] = Product::where('nama', 'like', "%$nama%")->get();


    //  wherein
    $stok= explode(",", request('stok'));
    $data['stok'] = request('stok');

    // $data['list_produk'] = Produk::whereIn('stok', $stok)->get();



    // where betwen

    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();

    // where not

    // $data['list_produk'] = Produk::where('stok', '<>' ,$stok)->get();


    // where not in

    // $data['list_produk'] = Produk::whereNotIn('stok',  $stok)->get();


    // where not between

    // $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();

    // where null
    // $data['list_produk'] = Produk::whereNull('stok')->get();

    // where not null
    // $data['list_produk'] = Produk::whereNotNull('stok')->get();


    // where date

    // $data['list_produk'] = Produk::whereDate('created_at', '2021-10-21'  )->get();

    // where group

    // $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->whereIn('stok', [10])->get();


    // result
    return view('template.produk.index', $data);
  }
}