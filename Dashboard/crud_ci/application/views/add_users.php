<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> users</h1>
		
		<form method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2">
					username
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" value="<?=isset($default['username'])? $default['username'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					password
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="password" value="<?=isset($default['password'])? $default['password'] : ""?>">
				</div>
			</div>
		    <!--  <div class="form-group">
				<label class="control-label col-sm-2">
					foto
				</label>
				<div class="col-sm-10">
					 <input type="text" class="form-control" name="foto" value="<?=isset($default['foto'])? $default['foto'] : ""?>"> -->
					<!-- <input type="file" class="form-control" name="foto" value="<?=isset($default['foto'])? $default['foto'] : ""?>">
				</div>
			</div>   -->
			<!-- <div class="form-group">
				<label class="control-label col-sm-2">
					NRP
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nrp" value="<?=isset($default['nrp'])? $default['nrp'] : ""?>">
				</div>
			</div><div class="form-group">
				<label class="control-label col-sm-2">
					Jabatan
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="jabatan" value="<?=isset($default['jabatan'])? $default['jabatan'] : ""?>">
				</div>
			</div><div class="form-group">
				<label class="control-label col-sm-2">
					Kesatuan
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="kesatuan" value="<?=isset($default['kesatuan'])? $default['kesatuan'] : ""?>">
				</div>
			</div><div class="form-group">
				<label class="control-label col-sm-2">
					Matra
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="matra" value="<?=isset($default['matra'])? $default['matra'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat					
				</label>
				<div class="col-sm-10">
					<textarea name="alamat" class="form-control"><?=isset($default['alamat'])? $default['alamat'] : ""?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" value="<?=isset($default['email'])? $default['email'] : ""?>">
				</div>
			</div> -->
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>