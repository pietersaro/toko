<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$this->data['user'] = User::paginate(15);
    	return view('daftar-user',$this->data);
    }
    public function tambah()
    {
    	return view('tambah-user');
    }
    public function simpan(request $request)
    {

    	$simpan = new User();
    	$simpan->name				= $request->form_name;
    	$simpan->email				= $request->form_email;
        $simpan->password           = $request->password;
    	$simpan->role		    = $request->form_role;

    	$simpan->save();

    	return redirect('user');
    }
    public function ubah($id)
    {
    	$this->data['user'] = User::find($id)->first();
    	return view('edit-user',$this->data);
    }
    public function update(request $request, $id)
    {
    	$update = User::find($id)->first();
    	$update->name              = $request->form_name;
        $update->email              = $request->form_email;
        if ($request->form_password ) {
            $update->password           = $request->form_password;
        }
        $update->role           = $request->form_role;
    	$update->save();

    	return redirect('user');
    }
    public function hapus($id)
    {
    	$hapus = User::where('id',$id)->first();
    	$hapus->delete();

    	return redirect('user');
    }
}
