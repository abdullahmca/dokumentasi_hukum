<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header">
                <div class="box-title">
                    <b><i class="fa fa-tasks"></i> <?= $button ?> Data Public.documents</b>
                </div> 
            </div>
            <div class="box-body">
                <form style="padding: 15px;" action="<?= $action; ?>" method="POST" enctype="multipart/form-data"> 
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="link">Sampul Dokumen</label>
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" name="id" value="<?=$id?>">
                                <input type="file" class="form-control" name="sampul" value="">
                                <? form_error('link')?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="link">Qr Code</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="qrccode" value="">
                                <? form_error('link')?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2">
                              
                                <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> <?= $button ?></button>
                                <a href="<?= site_url('documents') ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</a>
                            </div>
                        </div>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>