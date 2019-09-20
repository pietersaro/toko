<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
<div class="container">
	<h1>Form Edit Data Barang</h1>
	<hr>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Edit Data
			</div>
			<div class="panel-body">
				<form action="{{url('barang/update/').'/'.$barang->id}}" method="post">
					{{csrf_field()}}
					<label>Kode Barang</label>
					<input type="text" name="form_kode_barang" value="{{$barang->kd_barang}}" placeholder="Kode Barang" class="form-control">
					<label>Nama Barang</label>
					<input type="text" name="form_nama_barang" value="{{$barang->nm_barang}}" placeholder="Nama Barang" class="form-control"> 
					<label>Stock</label>
					<input type="text" name="form_stock" value="{{$barang->stock}}" placeholder="Stock" class="form-control">
					<br>
					 <input type="submit" name="Simpan" value="simpan" class="btn btn-success">
					<input type="reset" name="batal" value="batal" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6" style="padding: 30px;max-width: 100%">
		<h1> Daftar Sekarang</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
</body>
</html>