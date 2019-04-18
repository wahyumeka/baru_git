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
	<h1>Data Users</h1>

	<!-- <a href="data/add" class="btn btn-primary">Tambah Data anggota tni</a> -->
	<a href="Users/add" class="btn btn-primary">Setting User</a>
	<a href="Data/index" class="btn btn-primary">-></a>
	<table class="table" border="1">
		<thead>
			<tr>
				<th>#</th>
				<th>username</th>
				<th>Password</th>
				<!-- <th>foto</th> -->
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$no = 1; //untuk menampilkan no
			foreach($list_users as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[username]</td>
					<td>$row[password]</td>
					
					<td>
						<a href='Users/edit/$row[id]' class='btn btn-sm btn-info'>Update</a>
						<a href='Users/delete/$row[id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
			<!-- <tr>
				<td>#</td>
				<td>username</td>
				<td>Password</td>
				
				<td></td>
			</tr> -->
		<!-- </thead> -->
		
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			
			
		</tbody>
	</table>
</div>
	
</body>
</html>
