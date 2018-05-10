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
		<h4>CRUD OOP PHP</h4>
		<h5>Edit Data User</h5>

		<form action="proses.php?aksi=update" method="post">
		<?php
		foreach($db->edit($_GET['id']) as $d){
		?>
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
					<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
		<?php } ?>
		</form>
	</div>
</body>
</html>
