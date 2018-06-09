<div>

	<div><h2>DAFTAR MENU</h2><hr>
	 <a href="index.php?halaman=tambahmenu" class="btn btn-success">Tambah</a> 
	</div>
	<br>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Status</th>
			<th class="lebar18">Aksi</th>
		</tr>
	</thead>
	<tbody>

		 
		<?php   $no=1;
			$ambil = $koneksi->query(
										"SELECT * 
										FROM kategori_makanan 
										INNER JOIN(menu INNER JOIN status
										ON menu.id_status=status.id_status)
										ON menu.id_kategori=kategori_makanan.id_kategori"
									);
										?>
		<?php while($pecah = $ambil->fetch_assoc()){ 		?>
		 

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_menu']; ?></td>
			<td><?php echo $pecah['nama_kategori']; ?></td>
			<td><?php echo $pecah['harga_menu']; ?></td>
			<td><?php echo $pecah['status']; ?></td>
			<td>
				<a href="" class="btn btn-primary">Ubah</a>
				<a href="" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

		<?php
			$no++;
			}
		?>

	</tbody>
</table>
</div>