<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
			<div class="box-header">
				<div class="box-title">
                    <b><i class="fa fa-eye"></i> Detail Data Public.document_type</b>
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
							<td width="20%"><b>Name</b></td>
							<td><?= $name; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Singkatan</b></td>
							<td><?= $singkatan; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Parent Id</b></td>
							<td><?= $parent_id; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Status</b></td>
							<td><?= $status; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Integrasi</b></td>
							<td><?= $integrasi; ?></td>
						</tr>
					</table>
					<a href="<?= site_url('document_type') ?>" class="btn btn-danger pull-right">
						<i class="fa fa-sign-out"></i> Kembali
					</a>
				</div>
			</div>
		</div>
	</div>
</div>