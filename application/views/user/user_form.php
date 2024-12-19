<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <div class="box-title">
                    <b><i class="fa fa-tasks"></i> <?= $button ?> Data Public.users</b>
                </div>
                <div class="box-tools pull-right">
                    <button type="button" class="toggle-expand-btn btn btn-default btn-sm"><i class="fa fa-expand"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form style="padding: 15px;" action="<?= $action; ?>" method="POST" enctype="multipart/form-data"> 
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Nama Pengguna</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="users" id="users" placeholder="users" value="<?= $users; ?>" />
                                <?= form_error('users') ?>
                            </div>
                        </div>
                    </div> 
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_hash" id="password_hash" placeholder="Password Hash" value="<?= $password_hash; ?>" />
                                <?= form_error('password_hash') ?>
                            </div>
                        </div>
                    </div> 
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $email; ?>" />
                                <?= form_error('email') ?>
                            </div>
                        </div>
                    </div>    
					<div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2"> 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> <?= $button ?></button>
                                <a href="<?= site_url('user') ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>