<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$this->data['barang'] = Barang::paginate(15);
    	return view('daftar-barang',$this->data);
    }
    public function tambah()
    {
    	return view('tambah-barang');
    }
    public function simpan(request $request)
    {
    	$simpan = new Barang();
    	$simpan->kd_barang				= $request->form_kode_barang;
    	$simpan->nm_barang				= $request->form_nama_barang;
    	$simpan->stock				    = $request->form_stock;
    	$simpan->save();

    	return redirect('barang');
    }
    public function ubah($id)
    {
    	$this->data['barang'] = Barang::find($id)->first();
    	return view('edit-barang',$this->data);
    }
    public function update(request $request, $id)
    {
    	$update = Barang::find($id)->first();
    	$update->kd_barang			= $request->form_kode_barang;
    	$update->nm_barang			= $request->form_nama_barang;
    	$update->stock				= $request->form_stock;
    	
    	$update->save();

    	return redirect('barang');
    }
    public function hapus($id)
    {
    	$hapus = Barang::where('id',$id)->first();
    	$hapus->delete();

    	return redirect('barang');
    }
}
