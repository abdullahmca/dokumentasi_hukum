<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <div class="box-title">
                    <b><i class="fa fa-tasks"></i> <?= $button ?> Data Public.document_type</b>
                </div> 
            </div>
            <div class="box-body">
                <form style="padding: 15px;" action="<?= $action; ?>" method="POST" enctype="multipart/form-data"> 
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?= $name; ?>" />
                                <?= form_error('name') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Singkatan</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="singkatan" id="singkatan" placeholder="Singkatan" value="<?= $singkatan; ?>" />
                                <?= form_error('singkatan') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="integer">Parent Id</label>
                            <div class="col-md-6">
                                <select name="parent_id" class="form-control">
                                    <option value="0">parent</option>
                                    <?php foreach ($document_type_data as $value) { 
                                        ?>
                                        <option value="<?=$value->id?>"><?=$value->name?></option>
                                        <?php
                                    }?>
                                </select>
                                <!-- <input type="text" class="form-control" name="parent_id" id="parent_id" placeholder="Parent Id" value="<?= $parent_id; ?>" /> -->
                                <?= form_error('parent_id') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                                <!-- <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?= $status; ?>" /> -->
                                <?= form_error('status') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Integrasi</label>
                            <div class="col-md-6">
                                <select name="integrasi" class="form-control">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                <!-- <input type="text" class="form-control" name="integrasi" id="integrasi" placeholder="Integrasi" value="<?= $integrasi; ?>" /> -->
                                <?= form_error('integrasi') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2"> 
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> <?= $button ?></button>
                                <a href="<?= site_url('document_type') ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>