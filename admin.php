<div>

	<div><h2>DAFTAR ADMIN</h2><hr> 
		<a href="index.php?halaman=tambahadmin" class="btn btn-success">Tambah</a> 
	</div>
	<br>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		 
		<?php   $no=1;
			$ambil = $koneksi->query(
										"SELECT * 
										FROM admin "
									);
										?>
		<?php while($pecah = $ambil->fetch_assoc()){ 		?>
		 

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_admin']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			<td><?php echo $pecah['no_telp_admin']; ?></td>
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