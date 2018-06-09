<div>
	<h2>TAMBAH ADMIN</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	
		<div class="form-group">
		<label>Username</label>
		<input type="text" class="form-control" name="username">
	</div>
	
	<div class="form-group">
		<label>Password</label>
		<input id="salah" type="password" class="form-control" name="pass1">
	</div>

	<div class="form-group">
		<label>Masukkan Pasword sekali lagi</label>
		<input id="salah" type="password" class="form-control" name="pass2">
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>

	<div class="form-group">
		<label>No Telp</label>
		<input type="text" class="form-control" name="notel">
	</div>
	
<hr>
	<button class="btn btn-success" name="save">Simpan</button>

</form>

		<?php 
		

		if (isset($_POST['save'])) 
		{
			if ($_POST[pass1]==$_POST[pass2]) {
								$koneksi->query("	INSERT INTO admin
																(nama_menu,id_kategori,harga_menu,id_status) 
																VALUES($_POST[nama]','$_POST[kat]','$_POST[harga]','1');
															");
											
											echo "<div class='alert-info alert'> Data Tersimpan </div>";
											echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
												}
			else{
				echo "<div class='alert-dangger alert'> Sandi Salah </div>";
			}
			
		}

		 ?>
		

</div>


