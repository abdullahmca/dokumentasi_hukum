<?php 
//echo site_url('./assets/v3/');
?>

<?php 
    // print_r($this->session->userdata());
    //if($this->session->userdata('id_user')){}else{redirect(site_url(''));}?>
    <!DOCTYPE html>
    <!-- saved from url=(0032)<?=site_url('/')?> -->
    <html lang="zxx" data-uw-w-loader="" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
        <meta name="author" content="SUKOHARJO">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dokumentasi Hukum</title> 
        <!-- <link type="text/css" rel="stylesheet" charset="UTF-8" href="./JDIH Kabupaten Sukoharjo_files/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="./JDIH Kabupaten Sukoharjo_files/m=el_main"></script><link href="./JDIH Kabupaten Sukoharjo_files/widget_base.css" type="text/css" rel="stylesheet"> -->

        <link rel="shortcut icon" type="image/png" href="<?=site_url('./assets/v3/')?>pembidangan.png">
    <!-- <link rel="shortcut icon" type="image/png" href="https://jdih.sukoharjokab.go.id/upload/images/jdihn.png"/> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="<?=site_url('./assets/v3/')?>font-awesome.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" id="bootstrap-css">
    <!-- <link href="<?=site_url('./assets/v3/')?>bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://jdih.sukoharjokab.go.id//assets/perpus/css/material-kit.css" rel="stylesheet" />
    <link href="<?=site_url('./assets/v3/')?>styles.css" rel="stylesheet" />
    <script src="<?=site_url('./assets/v3/')?>jquery-1.11.2.min.js"></script>
    <script src="<?=site_url('./assets/v3/')?>bootstrap.min.js"></script>

        <style>
            body { 
                background: url("https://jdih.sukoharjokab.go.id/images/background1.jpg") no-repeat center center fixed; 
                background-size: cover;
                width: 100%; 
                height: 100%;
            }
        </style>
    </head>

 <body data-offset="15">


   <div class="container-fluid">
    <center>
        <a href="https://jdih.sukoharjokab.go.id/">
            <!-- <img class="img-responsive" src="./Jaringan Dokumentasi dan Informasi Hukum Kabupaten Sukoharjo_buku hukum_files/jdih_logo_white2.png"> -->
        </a>
    </center>
</div> 

<div class="container-fluid">      
    <div class="row">

     <center>
         <form action="<?=site_url('')?>perpustakaan/buku" method="post" class="navbar-form">
           <div class="form-group label-floating">
              <label class="control">Cari Buku :</label>
              <input type="text" name="search" class="form-control" value="" style="width: 300px;">
              <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Cari">
          </div>
      </form>
  </center>

  <div class="col-lg-2 col-md-2" style="color:white">
    <ul data-offset-top="225" data-spy="affix" class="nav nav-pills nav-stacked affix-top">
        <center>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan" method="post">
                    <input type="hidden" name="kategori" value="">
                    <input type="hidden" name="search" value="">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Semua">
                </form>
            </li>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan/buku" method="post">
                    <input type="hidden" name="kategori" value="1">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Buku">
                </form>
            </li>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan/majalah" method="post">
                    <input type="hidden" name="kategori" value="5">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Majalah">
                </form>
            </li>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan/dvd" method="post">
                    <input type="hidden" name="kategori" value="6">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="CD/DVD">
                </form>
            </li>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan/booklet" method="post">
                    <input type="hidden" name="kategori" value="7">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Booklet">
                </form>
            </li>
            <li role="presentation">
                <form class="navbar-form" action="<?=site_url('')?>perpustakaan/leaflet" method="post">
                    <input type="hidden" name="kategori" value="8">
                    <input type="submit" name="submit" class="btn btn-round btn-primary col-md-6" value="Leaflet" title="Leaflet / Selebaran">
                </form>
            </li>
        </center>
        <center>
            <a href="<?=site_url('')?>">
                <button type="submit" class="submit_on_enter btn btn-round btn-danger col-md-6">Kembali</button>
            </a>
        </center>
    </ul>
</div>
<div class="col-lg-10 col-md-10">
    <?=$contents?>
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <input type="hidden" value="ec3b7807ae6f325a2175bfb595742125.jpeg">
            <div class="card">
                <img class="card-img" height="200px" width="100px" src="<?=site_url('./assets/v3/')?>bangsa_terbelah.jpg">
                <span class="content-card">
                  <a href="https://jdih.sukoharjokab.go.id/perpustakaan/buku#">
                     <h6>Laporan Kinerja Instansix ...</h6>
                 </a>
                 <b>
                     <h7>Kabupaten Sukoharjo</h7>
                 </b>
             </span>
             <button class="knowbtn btn btn-warning btn-sm" data-toggle="modal" data-target="#2296">
              Detail
          </button>
          <button class="buybtn btn btn-success btn-sm">Tersedia</button>

          <div class="modal fade" id="2296" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                 <div class="modal-content">
                    <div class="modal-header">
                        <!--<div class="card">-->
                            <img class="card-img" height="200px" width="100px" src="<?=site_url('./assets/v3/')?>bangsa_terbelah.jpg">
                            <span class="content-card">
                                <a href="https://jdih.sukoharjokab.go.id/perpustakaan/buku#">
                                    <h6>Laporan Kinerja Instansi Pemerintah (LKJIP) Sekretariat Daerah Kabupaten Sukoharjo Tahun 2023</h6>
                                </a>
                                <table>
                                    <tbody><tr>
                                        <td><h7>Pengarang</h7></td>
                                        <td>:&nbsp;&nbsp;</td>
                                        <td></td>
                                        <td>
                                            <b> Kabupaten Sukoharjo </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h7>Nomor Klasifikasi</h7></td>
                                        <td>:&nbsp;&nbsp;</td>
                                        <td></td>
                                        <td>
                                            <b>  </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h7>Lokasi</h7></td>
                                        <td>:&nbsp;&nbsp;</td>
                                        <td></td>
                                        <td>
                                            <b> R9 OPD </b>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </span>
                            <!--</div>-->
                        </div>
                        <div class="modal-body">
                            <table>
                                <tbody><tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b> Inspektorat Daerah </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tempat Terbit</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b> Sukoharjo </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b>15-02-2024</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nomor Klasifikasi</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b></b>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td></td>
                                    <td>
                                        <b>
                                        Tersedia                                                                </b>
                                    </td>
                                </tr>

                            </tbody></table>
                            <br>
                            <table style="text-align:justify">
                                <tbody><tr>
                                    <td></td>
                                    <td></td>
                                    <td>                                                                         LKJIP Sekretariat Daerah Kabupaten Sukoharjo Tahun 2023 merupakan bentuk komitmen nyata Sekretariat Daerah Kabupaten Sukoharjo dalam mengimplementasikan Sistem Akuntabilitas Kinerja Instansi Pemeribtah (SAKIP) sebagaimana diamanatkan dalam Peraturan Pemerintah nomor 8 Tahun 2006 tentang Laporan Keuangan dan Kinerja Instansi Pemerintah Yang diatur dalam Peraturan Presiden Nomor 29 Tahun 2014 tentang Sistem Akuntabilitas Kinerja Instansi Pemerintah Dan Secara Teknis Diatur dalam Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 53 Tahun 2014 tentang Petunjuk Teknis Perjanjian Kinerja, Pelaporan Kinerja dan Tata Cara Reviu Atas Laporan Kinerja Instansi Pemerintah.                                                                </td>
                                </tr>
                            </tbody></table>
                        </div> 
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <input type="hidden" value="b8dfc17e27ee105bc429b7def8046a62.jpeg">
        <div class="card">
            <img class="card-img" height="200px" width="100px" src="<?=site_url('./assets/v3/')?>bangsa_terbelah.jpg">
            <span class="content-card">
              <a href="https://jdih.sukoharjokab.go.id/perpustakaan/buku#">
                 <h6>Laporan Penyelenggaraan P...</h6>
             </a>
             <b>
                 <h7>Kabupaten Sukoharjo</h7>
             </b>
         </span>
         <button class="knowbtn btn btn-warning btn-sm" data-toggle="modal" data-target="#2295">
          Detail
      </button>
      <button class="buybtn btn btn-success btn-sm">Tersedia</button>

      <div class="modal fade" id="2295" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                <div class="modal-header">
                    <!--<div class="card">-->
                        <img class="card-img" height="200px" width="100px" src="<?=site_url('./assets/v3/')?>bangsa_terbelah.jpg">
                        <span class="content-card">
                            <a href="https://jdih.sukoharjokab.go.id/perpustakaan/buku#">
                                <h6>Laporan Penyelenggaraan Pemerintahan Daerah (LPPD) Kabupaten Sukoharjo Tahun 2023</h6>
                            </a>
                            <table>
                                <tbody><tr>
                                    <td><h7>Pengarang</h7></td>
                                    <td>:&nbsp;&nbsp;</td>
                                    <td></td>
                                    <td>
                                        <b> Kabupaten Sukoharjo </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h7>Nomor Klasifikasi</h7></td>
                                    <td>:&nbsp;&nbsp;</td>
                                    <td></td>
                                    <td>
                                        <b>  </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td><h7>Lokasi</h7></td>
                                    <td>:&nbsp;&nbsp;</td>
                                    <td></td>
                                    <td>
                                        <b> R9 </b>
                                    </td>
                                </tr>
                            </tbody></table>
                        </span>
                        <!--</div>-->
                    </div>
                    <div class="modal-body">
                        <table>
                            <tbody><tr>
                                <td>Penerbit</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b> Bagian Pemerintahan </b>
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat Terbit</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b> Sukoharjo </b>
                                </td>
                            </tr>
                            <tr>
                                <td>Tahun Terbit</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b></b>
                                </td>
                            </tr>
                            <tr>
                                <td>ISBN</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b></b>
                                </td>
                            </tr>
                            <tr>
                                <td>Nomor Klasifikasi</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b></b>
                                </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td></td>
                                <td>
                                    <b>
                                    Tersedia                                                                </b>
                                </td>
                            </tr>

                        </tbody></table>
                        <br>
                        <table style="text-align:justify">
                            <tbody><tr>
                                <td></td>
                                <td></td>
                                <td>                                                                                                                                         </td>
                            </tr>
                        </tbody></table>
                    </div> 
                </div>
            </div>
        </div>

    </div>
</div>    

</div>

</div>

<div class="container"><ul class="pagination pull-left"><li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span></li><li class="page-item"><span class="page-link"><a href="<?=site_url('')?>perpustakaan/buku/2" data-ci-pagination-page="2">2</a></span></li><li class="page-item"><span class="page-link"><a href="<?=site_url('')?>perpustakaan/buku/3" data-ci-pagination-page="3">3</a></span></li><li class="page-item"><span class="page-link"><a href="<?=site_url('')?>perpustakaan/buku/2" data-ci-pagination-page="2" rel="next">Next</a></span></li><li class="page-item"><span class="page-link"><a href="<?=site_url('')?>perpustakaan/buku/147" data-ci-pagination-page="147">Last</a></span></li></ul></div>                
                <!-- <br /><br />
                
                <div class="container-fluid">
                    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Database Error</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1>A Database Error Occurred</h1>
		<p>Error Number: 1146</p><p>Table 'jdihsuko_website.iklan' doesn't exist</p><p>SELECT *
FROM `iklan`
WHERE `id_iklan` = '1'</p><p>Filename: views/perpustakaan/buku.php</p><p>Line Number: 271</p>	</div>
</body>
</html>--></div></div></div></body></html>