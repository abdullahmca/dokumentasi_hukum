<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="box-title">
                    <b><i class="fa fa-list-alt"></i> Data Public.user</b>
                </div> 
            </div>
            <div class="box-body">
                <a href="<?= site_url('user/create') ?>" class="btn btn-sm btn-primary" style="margin-left : 15px"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered table-striped table-hover" width="100%" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Id</th>
                                <th>User</th>
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
                            foreach ($user_data as $user2) { ?>
                            <tr>
                                <td style="text-align:center;"><?= $no++; ?></td>
                                <td><?= $user2->id ?></td>
                                <td><?= $user2->users ?></td>
                                <td><?= $user2->auth_key ?></td>
                                <td><?= $user2->password_hash ?></td>
                                <td><?= $user2->password_reset_token ?></td>
                                <td><?= $user2->email ?></td>
                                <td><?= $user2->status ?></td>
                                <td><?= $user2->created_at ?></td>
                                <td><?= $user2->updated_at ?></td>
                                <td><?= $user2->picture ?></td>
                                <td><?= $user2->updated_by ?></td>
                                <td style="text-align:center">
                                    <a href="<?= site_url('user/read/'.$user2->id) ?>" title="Lihat Detail Data"class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="<?= site_url('user/update/'.$user2->id) ?>" title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="<?= site_url('user/delete/'.$user2->id) ?>" title="Hapus Data" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
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