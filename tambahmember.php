<div>
	<h2>TAMBAH MENU</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	
	<div class="form-group">
		<label>Kategori</label>
									<?php   $ambil = $koneksi->query(
																	"SELECT * 
																	FROM kategori_makanan"
																);
																	?>
		<select class="form-control" name="kategori">

				<option>Pilih Kategori</option>

				<?php $kat=1;
				while($pecah = $ambil->fetch_assoc()){ 		?>

				<option><?php echo $pecah['nama_kategori']; ?></option>

				<?php $kat++; } ?>

		</select>
	</div>
	
	<div class="form-group">
		<label>Harga</label>
		<input type="number" class="form-control" name="harga">
	</div>
<hr>
	<button class="btn btn-success" name="save">Simpan</button>

</form>

		<?php 

		if (isset($_POST['save'])) 
		{
			$koneksi->query("	INSERT INTO menu
								(id_menu,nama_menu,id_kategori,harga_menu,id_status) 
								VALUES('','$_POST[nama]','$_POST[kat]','$_POST[harga]','1');
							");
			
			echo "<div class='alert-info alert'> Data Tersimpan </div>";
			echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
		}

		 ?>
		

</div>


