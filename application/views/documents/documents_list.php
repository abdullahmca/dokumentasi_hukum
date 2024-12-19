<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="box-title">
                    <b><i class="fa fa-list-alt"></i> Data Public.documents</b>
                </div> 
            </div>
            <div class="box-body">
                <a href="<?= site_url('documents/create') ?>" class="btn btn-sm btn-primary" style="margin-left : 15px"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered table-striped table-hover" width="100%" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
								<th>Id</th>
								<th>Tipe Dokumen</th>
								<th>Judul</th>
								<th>Tahun Terbit</th>
								<th>Bidang Hukum</th>
								<th>Link</th>
                                <th>Qr Code</th>
								<th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
                            $no = 1;
                            foreach ($documents_data as $documents) { ?>
                            <tr>
								<td style="text-align:center;"><?= $no++; ?></td>
								<td><?= $documents->id ?></td>
								<td><?= $documents->tipe_dokumen ?></td>
								<td><?= $documents->judul ?></td>
								<td><?= $documents->tahun_terbit ?></td>
								<td><?= $documents->bidang_hukum ?></td>
								<td><?= $documents->link ?></td>
                                <td><?= $documents->qrcode ?></td>
								<td style="text-align:center">
                                    <a href="<?= site_url('uploaddok/'.$documents->id) ?>" title="Unggah Data"class="btn btn-sm btn-primary"><i class="fa fa-upload"></i></a>
                                    <a href="<?= site_url('documents/read/'.$documents->id) ?>" title="Lihat Detail Data"class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="<?= site_url('documents/update/'.$documents->id) ?>" title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= site_url('documents/delete/'.$documents->id) ?>" title="Hapus Data" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
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