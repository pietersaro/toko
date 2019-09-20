@extends('layouts.app')

@section('content')
	<div class="container">
		<h1> Form Input User</h1>
		<hr>
		<div class="col-md-6">
			<div class="panel panel-primary">
			<div class="panel-heading">
				User Baru
			</div>
			<div class="panel-body">
				<form action="{{ url('user/simpan')}}" method="post">
					{{ csrf_field() }}
					<label>Nama</label>
					<input type="text" name="form_name" placeholder="Mr. Andrian" class="form-control">
					<label>Email</label>
					<input type="email" name="form_email" placeholder="Mr. Andrian" class="form-control">
					<label>Password</label>
					<input type="password" name="password" placeholder="*****" class="form-control">
					<label>Password Confirm</label>
					<input type="password" name="password_confirmation" placeholder="*****" class="form-control">
					<label>Role</label>
					<select name="form_role" class="form-control">
						<option value="">--Pilih Role--</option>
						<option value="1">Owner</option>
						<option value="2">Admin</option>
						<option value="3">Staff</option>
					</select>
					<br>
					<input type="submit" name="Simpan" value="simpan" class="btn btn-success">
					<input type="reset" name="batal" value="batal" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6" style="padding: 30px; max-width:100% ">
		<h1> Daftar User</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
@endsection