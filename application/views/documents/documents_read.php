<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
			<div class="box-header">
				<div class="box-title">
                    <b><i class="fa fa-eye"></i> Detail Data Public.documents</b>
                </div> 
			</div>
			<div class="box-body">
				<div style="padding: 15px;">
					<table class="table table-striped">
						<tr>
							<td width="20%"><b>Id</b></td>
							<td><?= $id; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Tipe Dokumen</b></td>
							<td><?= $tipe_dokumen; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Judul</b></td>
							<td><?= $judul; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Tahun Terbit</b></td>
							<td><?= $tahun_terbit; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Bidang Hukum</b></td>
							<td><?= $bidang_hukum; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Link</b></td>
							<td><?= $link; ?></td>
						</tr>
					</table>
					<a href="<?= site_url('documents') ?>" class="btn btn-danger pull-right">
						<i class="fa fa-sign-out"></i> Kembali
					</a>
				</div>
			</div>
		</div>
	</div>
</div>