<?php 
// print_r($this->session->userdata());
// if($this->session->userdata('id_user')){}else{redirect(site_url(''));}?>
<!DOCTYPE html>
<!-- saved from url=(0032)<?=site_url('/')?> -->
<html lang="zxx" data-uw-w-loader="" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
  <meta name="author" content="SUKOHARJO">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dokumentasi Hukum</title> 
  <!-- <link type="text/css" rel="stylesheet" charset="UTF-8" href="./JDIH Kabupaten Sukoharjo_files/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="./JDIH Kabupaten Sukoharjo_files/m=el_main"></script><link href="./JDIH Kabupaten Sukoharjo_files/widget_base.css" type="text/css" rel="stylesheet"> -->

  <link rel="shortcut icon" type="image/png" href="<?=site_url('./assets/v3/')?>pembidangan.png">
  <link href="https://jdih.sukoharjokab.go.id/assets/css/stylesv2.css" rel="stylesheet">
  <link href="https://jdih.sukoharjokab.go.id/assets/css/chatsv1a.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://jdih.sukoharjokab.go.id/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://jdih.sukoharjokab.go.id/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style type="text/css">
    /* Basic styles for the navigation */
nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav li {
  position: relative;
}

nav a {
  text-decoration: none;
  padding: 10px 20px;
  display: block;
}

/* Dropdown container hidden by default */
.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content li a {
  padding: 12px 16px;
  display: block;
}

/* Show the dropdown when hovering over the parent menu */
.dropdown:hover .dropdown-content {
  display: block;
}
.nav-dropdown .nav-submenu{
  margin-top: -29%;
}
    /* Style the dropdown container */
    li ul {
      margin-left: 180px;
      margin-top: -50px;
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      min-width: 160px;
      border-radius: 5px;
    }

    li:hover > ul {
      display: block;
    }

    /* Style for the second level dropdown */
    li li {
      display: block;
    }

    li li a {
      padding: 12px 16px;
      text-align: left;
    }

    li li a:hover {
      background-color: #fff;
    }

    /* Style for the input field */
    input[type="text"],input[type="text"] {
      padding: 10px 20px; /* Add padding for a better visual */
      border: 2px solid #ccc; /* Border color */
      border-radius: 50px; /* Round the edges */
      font-size: 16px; /* Font size */
      outline: none; /* Remove outline when focused */
      transition: border-color 0.3s ease; /* Smooth transition for border color */
    }

    input[type="text"]:focus,input[type="text"]:focus {
      border-color: #4CAF50; /* Change border color on focus */
    }
    .button {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 20px;
}

.button:hover {
  background-color: #f1f1f1;
}
  </style>
</head>

<body style="position: relative; min-height: 100%; top: 0px;"> 
  <!-- <div class="uwy userway_p1" data-uw-feature-ignore="true" data-uw-rm-ignore="true" title="Accessibility Menu" style="background-color: transparent !important; overflow: initial !important;"><div class="userway_buttons_wrapper"><div class="ulsti hidden userway_dark" id="userwayLstIcon" aria-label="Translations Menu" role="button" tabindex="0" aria-haspopup="dialog" data-uw-s19-ignore="" title="Translations Menu" style="background: rgb(0, 72, 255) !important;"><span class="uiiw"></span><div class="ups"><img width="43" height="43" data-uw-rm-ignore="" class="si_w" aria-hidden="true" alt="Spinner: White decorative" src="<?=site_url('./assets/v3/')?>spin_wh.svg"></div><span class="usr lst-spacer"></span><div class="uwaw-dictionary-tooltip"></div></div><div class="uai userway_dark" id="userwayAccessibilityIcon" aria-label="Accessibility Menu" role="button" tabindex="0" aria-haspopup="dialog" title="Accessibility Menu" style="background: rgb(0, 72, 255) !important;"><span class="uiiw"><img data-uw-rm-ignore="" class="ui_w" role="presentation" alt="" src="<?=site_url('./assets/v3/')?>body_wh.svg"></span><div class="ups"><img width="43" height="43" data-uw-rm-ignore="" class="si_w" aria-hidden="true" alt="Spinner: White decorative" src="<?=site_url('./assets/v3/')?>spin_wh.svg"></div><span class="usr"></span><div class="uwaw-dictionary-tooltip"></div></div></div>
  <iframe class="uwif userway_p1" data-uw-ignore-translate="true" name="userway" title="UserWay Accessibility Menu" style="max-width: 100vw !important; visibility: visible !important; opacity: 1 !important; color-scheme: light !important;" src="./JDIH Kabupaten Sukoharjo_files/saved_resource.html"></iframe>
</div><div class="uw-s10-bottom-ruler-guide"></div><div class="uw-s10-right-ruler-guide"></div><div class="uw-s10-left-ruler-guide"></div><div class="uw-s10-reading-guide"><div class="uw-s10-reading-guide__arrow"></div></div><div class="uw-s12-tooltip" aria-hidden="true"></div><div class="preloader" style="display: none;"></div> -->
<div id="main-wrapper">
  <div class="header header-light dark-text header-fixed">
    <div class="container">
      <nav id="navigation" class="navigation navigation-landscape">
        <div class="nav-header">
          <a class="nav-brand" href="<?=site_url('/')?>">
            <img width="30%" src="<?=site_url('./assets/v3/')?>pembidangan.png" class="logo" alt="">
          </a>
        </div>
        <div class="nav-menus-wrapper" style="transition-property: none;"><span class="nav-menus-wrapper-close-button">✕</span>
          <ul class="nav-menu nav-menu-social align-to-right">
            <li>
              <a href="<?=site_url('')?>">
                Beranda
              </a>
            </li>
            <li class="dropdown"><a href="<?=site_url('/')?>#">Tentang Kami<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu dropdown-content" style="right: auto;">
                <li>
                  <a href="<?=site_url('/')?>sejarah">
                    Sekilah Sejarah
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>dasar-hukum">
                    Dasar Hukum
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>sop">
                    SOP
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>visi">
                    Visi
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>misi">
                    Misi
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>sktim">
                    SK TIM
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>organisasi">
                    Struktur Organisasi
                  </a>
                </li>
              </ul>
            </li> 
            <!-- <li>
              <a href="<?=site_url('/')?>#">PPID<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu" style="right: auto;">
                <li>
                  <a href="#" target="_blank">
                    Bagian Hukum
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>" target="_blank">
                    Kabupaten Cilacap
                  </a>
                </li>

              </ul>
            </li> -->
            
            <li class="dropdown">
              <a href="<?=site_url('/')?>#">Produk Hukum<span class="submenu-indicator"></span></a>
              <ul class="nav-dropdown nav-submenu dropdown-content" style="right: auto;">
                <li>
                  <a href="<?=site_url('/')?>dokumen-hukum" target="_blank">
                    Produk Hukum Pusat
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>produk">
                    Produk Hukum Daerah
                  </a>
                  <!-- Second level dropdown -->
                  <ul>
                    <li><a href="<?=site_url('perbup')?>">Peraturan Bupati</a></li>
                    <li><a href="<?=site_url('perda')?>">Peraturan Daerah</a></li>
                    <li><a href="<?=site_url('kepbup')?>">Keputusan Bupati</a></li>
                    <li><a href="<?=site_url('bukuhukum')?>">Buku Hukum</a></li>
                  </ul>
                </li>
                <!-- <li>
                  <a href="<?=site_url('/')?>home/dprd">
                    Produk Hukum DPRD
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="<?=site_url('/')?>#">
                Dokumen Lainnya
                <span class="submenu-indicator"></span></a>
                <ul class="nav-dropdown nav-submenu dropdown-content" style="right: auto;">
                  <!-- <li>
                    <a href="javascript:void(0);">
                      Monografi Hukum
                      <span class="submenu-indicator"></span></a>
                      <ul class="nav-dropdown nav-submenu">
                        <li>
                          <a href="<?=site_url('/')?>buku">
                            Koleksi Buku
                          </a>
                        </li>
                        <li>
                          <a href="<?=site_url('/')?>monografi/1">
                          Naskah Akademis                                                        </a>
                        </li>
                        <li>
                          <a href="<?=site_url('/')?>monografi/2">
                          Pengkajian Hukum                                                        </a>
                        </li>
                        <li>
                          <a href="<?=site_url('/')?>monografi/4">
                          Penelitian Ilmiah                                                        </a>
                        </li>
                      </ul>
                    </li> -->
                    <li>
                      <a href="<?=site_url('/')?>monografi">
                        Monografi
                      </a>
                    </li>
                    <li>
                      <a href="<?=site_url('/')?>artikel">
                        Artikel /  Majalah Hukum
                      </a>
                    </li>
                    <li>
                      <a href="<?=site_url('/')?>putusan">
                        Putusan
                      </a>
                    </li> 
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<?=site_url('/')?>#">Informasi<span class="submenu-indicator"></span></a>
                  <ul class="nav-dropdown nav-submenu dropdown-content" style="right: 0px;">
                    <li>
                      <a href="<?=site_url('/')?>artikel">
                        Artikel
                      </a>
                    </li>
                    <li>
                      <a href="<?=site_url('/')?>berita">
                        Berita
                      </a>
                    </li> 
                    <li>
                      <a href="<?=site_url('/')?>vidio">
                        Vidio
                      </a>
                    </li> 
                  </ul>
                </li>
                <li>
                  <a href="<?=site_url('/')?>ikm">
                    IKM
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>bahasa">
                    BAHASA
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>faq">
                    FAQ
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/')?>kontak">
                    Kontak
                  </a>
                </li>
                <li>
                  <a href="<?=site_url('/logout')?>">
                    Keluar
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>

<!-- Aplikasi -->
<section class="space gray">
    <div class="container" style="padding-top:1%">
      <?=$contents?>
    </div>
</section>

    </div>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/jquery.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/popper.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/bootstrap.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/slick.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/slider-bg.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/smoothproducts.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/snackbar.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/jQuery.style.switcher.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/js/custom.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://jdih.sukoharjokab.go.id/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="//translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script> 
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=8OifHdJ9"></script>
    <script>
      (function(d) {
        var s = d.createElement("script");
        s.setAttribute("data-account", "6MpmOhqhA7");
        s.setAttribute("src", "https://cdn.userway.org/widget.js");
        (d.body || d.head).appendChild(s);
      })
      (document)
    </script><script data-account="6MpmOhqhA7" src="<?=site_url('./assets/v3/')?>/widget.js.download"></script>

    <noscript>
      Please ensure Javascript is enabled for purposes of
      <a href="https://userway.org">
        website accessibility
      </a>
    </noscript>

    <script>
      function loadGoogleTranslate() {
        new google.translate.TranslateElement("google_element");
      }
    </script>

    <div hidden="" style="width: 1px; height: 1px; position: absolute; z-index: -1000000;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clippath id="id-119"><path></path></clippath><clippath id="id-335"><path></path></clippath><filter id="filter-id-340" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><fegaussianblur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></fegaussianblur><feoffset result="offsetBlur" dx="1" dy="1"></feoffset><feflood flood-color="#000000" flood-opacity="0.5"></feflood><fecomposite in2="offsetBlur" operator="in"></fecomposite><femerge><femergenode></femergenode><femergenode in="SourceGraphic"></femergenode></femerge></filter><filter id="filter-id-243" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><fegaussianblur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></fegaussianblur><feoffset result="offsetBlur" dx="1" dy="1"></feoffset><feflood flood-color="#000000" flood-opacity="0.5"></feflood><fecomposite in2="offsetBlur" operator="in"></fecomposite><femerge><femergenode></femergenode><femergenode in="SourceGraphic"></femergenode></femerge><fegaussianblur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></fegaussianblur><feoffset result="offsetBlur" dx="1" dy="1"></feoffset><feflood flood-color="#000000" flood-opacity="0.5"></feflood><fecomposite in2="offsetBlur" operator="in"></fecomposite><femerge><femergenode></femergenode><femergenode in="SourceGraphic"></femergenode></femerge></filter><filter id="filter-id-124" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><fegaussianblur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></fegaussianblur><feoffset result="offsetBlur" dx="1" dy="1"></feoffset><feflood flood-color="#000000" flood-opacity="0.5"></feflood><fecomposite in2="offsetBlur" operator="in"></fecomposite><femerge><femergenode></femergenode><femergenode in="SourceGraphic"></femergenode></femerge></filter></defs></svg></div></div><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: &#39;Google Sans&#39;, Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="<?=site_url('./assets/v3/')?>24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Teks asli</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Beri rating terjemahan ini</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Masukan Anda akan digunakan untuk membantu meningkatkan kualitas Google Terjemahan</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Terjemahan bagus" aria-label="Terjemahan bagus" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Terjemahan buruk" aria-label="Terjemahan buruk" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="https://translate.googleapis.com/translate_voting?client=te" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0" src="<?=site_url('./assets/v3/')?>saved_resource(2).html"></iframe></div></div></div><script src="./JDIH Kabupaten Sukoharjo_files/widget_app_base_1730455764190.js.download" async="" id="a11yWidgetSrc" crossorigin="anonymous" integrity="sha256-g9il4bXjmrZlvgjBu9mQOQ9hx9j2VJ+xj21/OOsXTrY="></script><div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf"><div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe" width="96px" height="96px" viewBox="0 0 66 66"><circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><script crossorigin="anonymous" integrity="sha256-x/r5BifaR+jv2CMoQOWWGzjanuVNvE8w7oUWiyzyzR8=" src="./JDIH Kabupaten Sukoharjo_files/remediation-tool-free.js.download"></script>
  </body>
  </html>