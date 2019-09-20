<!DOCTYPE html>
<html>
<head>
	<title>Daftar Pegawai</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
<div class="container">
	<h1>Form Edit Data Pegawai</h1>
	<hr>
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Edit Data
			</div>
			<div class="panel-body">
				<form action="{{url('user/update/').'/'.$user->id}}" method="post">
					{{csrf_field()}}
					<label>Nama</label>
					<input type="text" name="form_name" placeholder="Mr. Andrian" class="form-control" value="{{ $user->name }}">
					<label>Email</label>
					<input type="email" name="form_email" placeholder="Mr. Andrian" class="form-control" value="{{ $user->email }}">
					<label>Password</label>
					<input type="password" name="password" placeholder="*****" class="form-control" value="">
					<label>Password Confirm</label>
					<input type="password" name="password_confirmation" placeholder="*****" class="form-control">
					<label>Role</label>
					<select name="form_role" class="form-control">
						<option value="">--Pilih Role--</option>
						<option value="1" {{ $user->role == 1 ? 'selected':'' }}>Owner</option>
						<option value="2" {{ $user->role == 2 ? 'selected':'' }}>Admin</option>
						<option value="3" {{ $user->role == 3 ? 'selected':'' }}>Staff</option>
					</select>
					<br>
					<input type="submit" name="Simpan" value="simpan" class="btn btn-success">
					<input type="reset" name="batal" value="batal" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6" style="padding: 30px;max-width: 100%">
		<h1> Ubah User</h1>
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