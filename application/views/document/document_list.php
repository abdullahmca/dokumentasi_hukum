<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="box-title">
                    <b><i class="fa fa-list-alt"></i> Data Public.user</b>
                </div>
                <div class="box-tools pull-right">
                    <button type="button" class="toggle-expand-btn btn btn-default btn-sm"><i class="fa fa-expand"></i></button>
                </div>
            </div>
            <div class="box-body">
                <a href="<?= site_url('document/create') ?>" class="btn btn-primary" style="margin-left : 15px"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered table-striped table-hover" width="100%" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
								<th>Id</th>
								<th>Users</th>
								<th>Auth Key</th>
								<th>Password Hash</th>
								<th>Password Reset Token</th>
								<th>Email</th>
								<th>Status</th>
								<th>Created At</th>
								<th>Updated At</th>
								<th>Picture</th>
								<th>Updated By</th>
								<th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
                            $no = 1;
                            foreach ($document_data as $document) { ?>
                            <tr>
								<td style="text-align:center;"><?= $no++; ?></td>
								<td><?= $document->id ?></td>
								<td><?= $document->users ?></td>
								<td><?= $document->auth_key ?></td>
								<td><?= $document->password_hash ?></td>
								<td><?= $document->password_reset_token ?></td>
								<td><?= $document->email ?></td>
								<td><?= $document->status ?></td>
								<td><?= $document->created_at ?></td>
								<td><?= $document->updated_at ?></td>
								<td><?= $document->picture ?></td>
								<td><?= $document->updated_by ?></td>
								<td style="text-align:center">
                                    <a href="<?= site_url('document/read/'.$document->id) ?>" title="Lihat Detail Data"class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="<?= site_url('document/update/'.$document->id) ?>" title="Ubah Data" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
                                    <a href="<?= site_url('document/delete/'.$document->id) ?>" title="Hapus Data" class="btn btn-danger hapus"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
						<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= call_datatable("#mytable") ?>
<?= swal_delete("#mytable",".hapus") ?>