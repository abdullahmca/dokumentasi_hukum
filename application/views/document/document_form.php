<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <div class="box-title">
                    <b><i class="fa fa-tasks"></i> <?= $button ?> Data Public.user</b>
                </div>
                <div class="box-tools pull-right">
                    <button type="button" class="toggle-expand-btn btn btn-default btn-sm"><i class="fa fa-expand"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form style="padding: 15px;" action="<?= $action; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="integer">Id</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?= $id; ?>" />
                                <?= form_error('id') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Users</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="users" id="users" placeholder="Users" value="<?= $users; ?>" />
                                <?= form_error('users') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Auth Key</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="auth_key" id="auth_key" placeholder="Auth Key" value="<?= $auth_key; ?>" />
                                <?= form_error('auth_key') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Password Hash</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password_hash" id="password_hash" placeholder="Password Hash" value="<?= $password_hash; ?>" />
                                <?= form_error('password_hash') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Password Reset Token</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="password_reset_token" id="password_reset_token" placeholder="Password Reset Token" value="<?= $password_reset_token; ?>" />
                                <?= form_error('password_reset_token') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Email</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $email; ?>" />
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="integer">Status</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= $status; ?>" />
                                <?= form_error('status') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Created At</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?= $created_at; ?>" />
                                <?= form_error('created_at') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Updated At</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?= $updated_at; ?>" />
                                <?= form_error('updated_at') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Picture</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="picture" id="picture" placeholder="Picture" value="<?= $picture; ?>" />
                                <?= form_error('picture') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Updated By</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?= $updated_by; ?>" />
                                <?= form_error('updated_by') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2">
                              
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> <?= $button ?></button>
                                <a href="<?= site_url('document') ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>