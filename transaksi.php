<div>

	<div><h2>DAFTAR TRANSAKSI</h2><hr> <a href="" class="btn btn-success">Tambah</a> 
	</div>
	<br>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Admin</th>
			<th>Member</th>
			<th>Meja</th>
			<th>Waktu Transaksi</th>
			<th>Total Belanja</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		 
		<?php   $no=1;
			$ambil = $koneksi->query(	"SELECT * 
										FROM admin 
										INNER JOIN( pelanggan
										INNER JOIN( pesanan INNER JOIN meja
										ON pesanan.id_meja=meja.id_meja)
										ON pesanan.id_pelanggan=pelanggan.id_pelanggan)
										ON pesanan.id_admin=admin.id_admin");
										?>
		<?php while($pecah = $ambil->fetch_assoc()){ 		?>
		 

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_admin']; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['nama_meja']; ?></td>
			<td>waktu</td>
			<td>jumlah belanja</td>
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