<main role="main" class="container">
	<?php if (!empty($this->session->flashdata('success'))) { ?>
		<div class="alert alert-success mb-2" role="alert">
			<?= $this->session->flashdata('success'); ?>
		</div>
	<?php } ?>
	<?php if (!empty($this->session->flashdata('error'))) { ?>
		<div class="alert alert-danger mb-2" role="alert">
			<?= $this->session->flashdata('error'); ?>
		</div>
	<?php } ?>
	<a href="<?php echo base_url('admin/tambah'); ?>" class="btn btn-success mb-3">Tambah</a>
	<br />
	<div class="card">
		<div class="card-header">Data Siswa</div>
		<div class="card-body">
			<table class="table table-bordered" id="datatable">
				<thead>
					<tr>
						<th width="10%">No</th>
						<th>ID</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th>Nomor Telfon</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($admin as $row) {
					?>
						<tr>
							<td widtd="5%"><?php echo $no++; ?></td>
							<td><?php echo $row->id_user; ?></td>
							<td><?php echo $row->username; ?></td>
							<td><?php echo $row->nama_lengkap; ?></td>
							<td><?php echo $row->alamat; ?></td>
							<td><?php echo $row->phone; ?></td>
							<td><?php echo $row->status; ?></td>
							<td>
								<a href="<?php echo base_url('admin/edit/' . $row->id_user); ?>" class="btn btn-warning">Edit</a>
								<a href="javascript:void(0)" class="btn btn-danger" onclick="remove_form('<?= base_url("admin/delete/" . $row->id_user); ?>')">Hapus</a>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</main>