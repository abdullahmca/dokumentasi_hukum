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
                            <label class="col-md-2" for="integer">Tipe Dokumen</label>
                            <div class="col-md-6">
                                <select name="tipe_dokumen" class="select2 form-control">
                                    <option value="1">pilih data</option>
                                    <?php 
                                    $data=$this->db->query('Select * from "public"."document_type"')->result();
                                    foreach($data as $dt){?>
                                        <option value="<?=$dt->id?>"><?=$dt->singkatan?></option>
                                    <?php }
                                    ?>
                                    <!-- <option value="undang-undang">Undang - Undang</option>
                                    <option value="peraturan presiden">Perpres</option>
                                    <option value="peraturan daerah kabupaten">Perda</option>
                                    <option value="peraturan bupati">Perbup</option>
                                    <option value="keputusan bupati">Kepbup</option> -->
                                </select>
                                <!-- <input type="text" class="form-control" name="tipe_dokumen" id="tipe_dokumen" placeholder="Tipe Dokumen" value="<?= $tipe_dokumen; ?>" /> -->
                                <?= form_error('tipe_dokumen') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="judul">Judul</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="judul" id="judul" placeholder="Judul"><?= $judul; ?></textarea>
                                <? form_error('judul')?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="character varying">Tahun Terbit</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="Tahun Terbit" value="<?= $tahun_terbit; ?>" />
                                <?= form_error('tahun_terbit') ?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="bidang_hukum">Bidang Hukum</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="bidang_hukum" id="bidang_hukum" placeholder="Bidang Hukum"><?= $bidang_hukum; ?></textarea>
                                <? form_error('bidang_hukum')?>
                            </div>
                        </div>
                    </div>
					<div class="form-group">
                        <div class="row">
                            <label class="col-md-2" for="link">Link</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" name="link" id="link" placeholder="Link"><?= $link; ?></textarea>
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