<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <div class="box-title">
                    <b><i class="fa fa-list-alt"></i> Data Public.document_type</b>
                </div> 
            </div>
            <div class="box-body">
                <a href="<?= site_url('document_type/create') ?>" class="btn btn-sm btn-primary" style="margin-left : 15px"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="table-responsive" style="padding: 15px">
                    <table class="table table-bordered table-striped table-hover" width="100%" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%">No</th> 
								<th>Name</th>
								<th>Singkatan</th>
								<th>Parent Id</th>
								<th>Status</th>
								<th>Integrasi</th>
								<th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
                            $no = 1;
                            foreach ($document_type_data as $document_type) { ?>
                            <tr>
								<td style="text-align:center;"><?= $no++; ?></td> 
								<td><?= $document_type->name ?></td>
								<td><?= $document_type->singkatan ?></td>
								<td><?= $document_type->parent_id ?></td>
								<td><?= $document_type->status ?></td>
								<td><?= $document_type->integrasi ?></td>
								<td style="text-align:center">
                                    <a href="<?= site_url('document_type/read/'.$document_type->id) ?>" title="Lihat Detail Data"class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="<?= site_url('document_type/update/'.$document_type->id) ?>" title="Ubah Data" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= site_url('document_type/delete/'.$document_type->id) ?>" title="Hapus Data" class="btn btn-sm btn-danger hapus"><i class="fa fa-trash"></i></a>
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