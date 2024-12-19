
<!DOCTYPE html>
<html lang="id" itemscope itemtype="https://schema.org/WebSite">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log Masuk &lsaquo; DISKOMINFO KABUPATEN CILACAP &#8212; WordPress</title>
	<meta name='robots' content='max-image-preview:large, noindex, noarchive' />
	<link rel='stylesheet' id='dashicons-css' href='https://kominfo.cilacapkab.go.id/wp-includes/css/dashicons.min.css?ver=6.6.2' media='all' />
	<link rel='stylesheet' id='buttons-css' href='https://kominfo.cilacapkab.go.id/wp-includes/css/buttons.min.css?ver=6.6.2' media='all' />
	<link rel='stylesheet' id='forms-css' href='https://kominfo.cilacapkab.go.id/wp-admin/css/forms.min.css?ver=6.6.2' media='all' />
	<link rel='stylesheet' id='l10n-css' href='https://kominfo.cilacapkab.go.id/wp-admin/css/l10n.min.css?ver=6.6.2' media='all' />
	<link rel='stylesheet' id='login-css' href='https://kominfo.cilacapkab.go.id/wp-admin/css/login.min.css?ver=6.6.2' media='all' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="https://kominfo.cilacapkab.go.id/wp-content/uploads/2020/09/cropped-icon-cilacap-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://kominfo.cilacapkab.go.id/wp-content/uploads/2020/09/cropped-icon-cilacap-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://kominfo.cilacapkab.go.id/wp-content/uploads/2020/09/cropped-icon-cilacap-180x180.png" />
	<meta name="msapplication-TileImage" content="https://kominfo.cilacapkab.go.id/wp-content/uploads/2020/09/cropped-icon-cilacap-270x270.png" />
</head>
<body class="login no-js login-action-login wp-core-ui  locale-id-id">
	<script>
		document.body.className = document.body.className.replace('no-js','js');
	</script>

	<div id="login">
		<h1><a href="https://wordpress.org/">Dipersembahkan oleh WordPress</a></h1> 
		<form name="loginform" id="loginform" action="<?=site_url('cek_login')?>" method="post">
			<p>
				<label for="user_login">Nama Pengguna atau Alamat Email</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username" required="required" />
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">Sandi</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required" />
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Tampilkan sandi">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
			<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> <label for="rememberme">Ingat Saya</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log Masuk" />
				<input type="hidden" name="redirect_to" value="https://kominfo.cilacapkab.go.id/wp-admin/" />
				<input type="hidden" name="testcookie" value="1" />
			</p>
		</form>

		<p id="nav">
			<!-- <a class="wp-login-lost-password" href="https://kominfo.cilacapkab.go.id/wp-login.php?action=lostpassword">Lupa sandi Anda?</a>			</p> -->
			<script>
				function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
				wp_attempt_focus();
				if ( typeof wpOnload === 'function' ) { wpOnload() }
			</script> 
		</div>
		<!-- <div class="language-switcher">
			<form id="language-switcher" method="get">

				<label for="language-switcher-locales">
					<span class="dashicons dashicons-translation" aria-hidden="true"></span>
					<span class="screen-reader-text">
					Bahasa						</span>
				</label>

				<select name="wp_lang" id="language-switcher-locales"><option value="en_US" lang="en" data-installed="1">English (United States)</option>
					<option value="id_ID" lang="id" selected='selected' data-installed="1">Bahasa Indonesia</option></select>
					
					<input type="hidden" name="redirect_to" value="https://kominfo.cilacapkab.go.id/wp-admin/" />
					
					
					<input type="submit" class="button" value="Ubah">

				</form>
			</div> -->
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
			<script id="zxcvbn-async-js-extra">
				var _zxcvbnSettings = {"src":"https:\/\/kominfo.cilacapkab.go.id\/wp-includes\/js\/zxcvbn.min.js"};
			</script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
			<script id="wp-i18n-js-after">
				wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
			</script>
			<script id="password-strength-meter-js-extra">
				var pwsL10n = {"unknown":"Kekuatan sandi tak diketahui","short":"Sangat lemah","bad":"Lemah","good":"Sedang","strong":"Kuat","mismatch":"Tidak sama"};
			</script>
			<script id="password-strength-meter-js-translations">
				( function( domain, translations ) {
					var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
					localeData[""].domain = domain;
					wp.i18n.setLocaleData( localeData, domain );
				} )( "default", {"translation-revision-date":"2024-10-16 10:49:54+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n > 1;","lang":"id"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s telah kedaluarsa sejak versi %2$s! Gunakan %3$s sebagai gantinya. Silakan pertimbangkan untuk menulis kode yang lebih inklusif."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
			</script>
			<script src="https://kominfo.cilacapkab.go.id/wp-admin/js/password-strength-meter.min.js?ver=6.6.2" id="password-strength-meter-js"></script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
			<script id="wp-util-js-extra">
				var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
			</script>
			<script src="https://kominfo.cilacapkab.go.id/wp-includes/js/wp-util.min.js?ver=6.6.2" id="wp-util-js"></script>
			<script id="user-profile-js-extra">
				var userProfileL10n = {"user_id":"0","nonce":"8f2b26a12f"};
			</script>
			<script id="user-profile-js-translations">
				( function( domain, translations ) {
					var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
					localeData[""].domain = domain;
					wp.i18n.setLocaleData( localeData, domain );
				} )( "default", {"translation-revision-date":"2024-10-16 10:49:54+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n > 1;","lang":"id"},"Your new password has not been saved.":["Sandi baru Anda belum disimpan."],"Show":["Tampilkan"],"Hide":["Sembunyikan"],"Show password":["Tampilkan sandi"],"Confirm use of weak password":["Setujui penggunaan sandi yang lemah"],"Hide password":["Sembunyikan sandi"],"The changes you made will be lost if you navigate away from this page.":["Perubahan yang Anda buat akan hilang jika Anda meninggalkan laman ini."]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
			</script>
			<script src="https://kominfo.cilacapkab.go.id/wp-admin/js/user-profile.min.js?ver=6.6.2" id="user-profile-js"></script>
			<script data-cfasync="false"> var dFlipLocation = "https://kominfo.cilacapkab.go.id/wp-content/plugins/3d-flipbook-dflip-lite/assets/"; var dFlipWPGlobal = {"text":{"toggleSound":"Turn on\/off Sound","toggleThumbnails":"Toggle Thumbnails","toggleOutline":"Toggle Outline\/Bookmark","previousPage":"Previous Page","nextPage":"Next Page","toggleFullscreen":"Toggle Fullscreen","zoomIn":"Zoom In","zoomOut":"Zoom Out","toggleHelp":"Toggle Help","singlePageMode":"Single Page Mode","doublePageMode":"Double Page Mode","downloadPDFFile":"Download PDF File","gotoFirstPage":"Goto First Page","gotoLastPage":"Goto Last Page","share":"Share","mailSubject":"I wanted you to see this FlipBook","mailBody":"Check out this site {{url}}","loading":"DearFlip: Loading "},"viewerType":"flipbook","moreControls":"download,pageMode,startPage,endPage,sound","hideControls":"","scrollWheel":"false","backgroundColor":"#777","backgroundImage":"","height":"auto","paddingLeft":"20","paddingRight":"20","controlsPosition":"bottom","duration":800,"soundEnable":"true","enableDownload":"true","showSearchControl":"false","showPrintControl":"false","enableAnnotation":false,"enableAnalytics":"false","webgl":"true","hard":"none","maxTextureSize":"1600","rangeChunkSize":"524288","zoomRatio":1.5,"stiffness":3,"pageMode":"0","singlePageMode":"0","pageSize":"0","autoPlay":"false","autoPlayDuration":5000,"autoPlayStart":"false","linkTarget":"2","sharePrefix":"flipbook-"};</script>	</body>
			</html>
