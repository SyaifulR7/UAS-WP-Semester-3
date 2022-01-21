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
<div class="card">
	<div class="card-body">
		<!-- Main content -->
		<form action="<?= site_url("/main/upload") ?>" method="POST" enctype="multipart/form-data">
			<input type="file" name="file">
			<input type="submit" class="btn btn-primary" value="Upload">
		</form>
		<hr>
		<table class="table table-bordered table-striped my-4" id="datatable">
			<thead>
				<tr>
					<th class="w-75">Nama File</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($files as $file) : ?>
					<tr>
						<td><?= $file ?></td>
						<td>
							<a href="<?= base_url('upload/' . $file) ?>" class="btn btn-primary">Unduh</a>
							<a href="javascript:void(0)" class="btn btn-danger" onclick="remove_form('<?= base_url("main/delete?file=" . $file); ?>')"> Hapus </a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>