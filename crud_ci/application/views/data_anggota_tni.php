<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Latihan CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Data Anggota TNI</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data anggota tni</a>
	<a href="Users/index" class="btn btn-primary">Setting User</a>

	<table class="table" border="1">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama anggota</th>
				<th>Pangkat</th>
				<th>NRP</th>
				<th>Jabatan</th>
				<th>Kesatuan</th>
				<th>Matra</th>
				<th>Alamat</th>
				<th>Email</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($list_karyawan as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[name]</td>
					<td>$row[pangkat]</td>
					<td>$row[nrp]</td>
					<td>$row[jabatan]</td>
					<td>$row[kesatuan]</td>
					<td>$row[matra]</td>
					<td>$row[alamat]</td>
					<td>$row[email]</td>
					<td>
						<a href='data/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>
