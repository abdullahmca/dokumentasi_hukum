<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
			<div class="box-header">
				<div class="box-title">
                    <b><i class="fa fa-eye"></i> Detail Data Public.user</b>
                </div>
                <div class="box-tools pull-right">
                    <button type="button" class="toggle-expand-btn btn btn-default btn-sm"><i class="fa fa-expand"></i></button>
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
							<td width="20%"><b>Users</b></td>
							<td><?= $users; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Auth Key</b></td>
							<td><?= $auth_key; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Password Hash</b></td>
							<td><?= $password_hash; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Password Reset Token</b></td>
							<td><?= $password_reset_token; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Email</b></td>
							<td><?= $email; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Status</b></td>
							<td><?= $status; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Created At</b></td>
							<td><?= $created_at; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Updated At</b></td>
							<td><?= $updated_at; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Picture</b></td>
							<td><?= $picture; ?></td>
						</tr>
						<tr>
							<td width="20%"><b>Updated By</b></td>
							<td><?= $updated_by; ?></td>
						</tr>
					</table>
					<a href="<?= site_url('document') ?>" class="btn btn-danger pull-right">
						<i class="fa fa-sign-out"></i> Kembali
					</a>
				</div>
			</div>
		</div>
	</div>
</div>