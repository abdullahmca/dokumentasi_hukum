
<!-- Peraturan Terbaru -->
<section class="middle">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
				<div class="sec_title position-relative text-center mb-5">
					<h6 class="text-muted mb-0">
						Daftar <?=$subtitle?> yang terbaru
					</h6>
					<h3 class="ft-bold">
						<span style="text-transform: uppercase;"><?=$subtitle?></span> TERBARU
					</h3>
				</div>
			</div>
		</div>
		<div class="row align-items-center"> 
			<!-- https://me-qr.com/id/qr-code-generator/qr -->
			<?php //print_r($data_perda);
				if($data_perda){
					foreach ($data_perda as $val) {?>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<div class="job_grid d-block border rounded">
							<a href="https://jdih.sukoharjokab.go.id/produk/detail/11759">
							</a>
							<div class="cats-box mlb-res rounded bg-white d-flex align-items-center justify-content-start px-3 py-3">
								<a href="#">
									<div class="jb-list01-thumb">
										<?php if($val->qrcode==''){?>
											<img src="<?=site_url('./assets/v3/')?>qrjdihclp24_.png" class="img-fluid-barcode" width="80" alt="">
										<?php }else{ ?>
											<img src="<?=site_url('./assets/v3/'.$val->qrcode)?>" class="img-fluid-barcode" width="80" alt="">
										<?php }?>
									</div>
								</a>
								<div class="jb-list01 pl-3">
									<a href="#">
										<div class="jb-list-01-title">
											<h6 class="ft-medium mb-1"><?=$val->judul?></h6>
										</div>
										<div class="jb-list-01-info d-block mb-3">
											<span class="text-muted mr-2">
												<i class="fa fa-book"></i>
												<?=$val->name?> Tahun <?=$val->tahun_terbit?>
											</span>
										</div>
									</a>
								<div class="jb-list-01-title d-inline">
									<a href="<?=site_url(strtolower($val->singkatan))?>">
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-info bg-light-info"> <?=$val->name?></span>
									</a>
									<a href="#" target="_blank">
										<span class="px-2 mb-2 d-inline-flex py-1 rounded text-purple bg-light-purple"> <?=$val->bidang_hukum?> </span>
									</a>
									<a href="<?=$val->link?>" target="_blank">
										<span class="px-2 mb-2 d-inline-flex py-1 rounded text-warning bg-light-warning"> Lihat
										</span>
									</a>
									<a href="<?=$val->link?>" target="_blank">
										<span class="px-2 mb-2 d-inline-flex py-1 rounded text-danger bg-light-danger"> Unduh
										</span>
									</a>
								</div>
							</div>
						</div> 
					</div>
				</div>  
			<?php }}else{ ?><center>
				<span class="px-2 mb-2 d-inline-flex py-1 rounded text-danger bg-light-danger"> Data Tidak Ditemukan ...
				</span></center>
			<?php } ?>
	</div>
	<div class="row justify-content-center" style="display:none;">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<div class="position-relative text-center">
				<a href="https://jdih.sukoharjokab.go.id/produk" class="btn btn-md theme-bg rounded text-light hover-theme"> Produk Hukum Lainya...
					<i class="fa fa-arrow-circle-right"></i>
				</a>
			</div>
		</div>
	</div>
	</div>
</section>