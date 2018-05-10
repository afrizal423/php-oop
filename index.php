<?php
include 'aksi.php';
$db = new aksi();
?>
<html>
<head>
	<title>PHP OOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
	<div class="container">
		<h4>OOP PHP</h4>
		<h5>Data User</h5>
		<!--
		<form action="aksi.php?aksi=cari" method="post">
			<tr>
				<td>Cari</td>
				<td><input type="text" name="nama"></td>
			</tr>
		</from> -->
		<a href="input.php">Input Data</a>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Usia</th>
				<th>Opsi</th>
			</tr>
			<?php
			$no = 1;
			foreach($db->tampil_data() as $x){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $x['nama']; ?></td>
				<td><?php echo $x['alamat']; ?></td>
				<td><?php echo $x['usia']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
					<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</div>
</body>
</html>
