<?php
	// HEADER
?>
	<!DOCTYPE html>
	<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
	<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
	<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?= isset($page_meta["title"]) ? $page_meta["title"] : "SITE NAME" ?></title>
		<meta name="keywords" content="<?= isset($page_meta["keywords"]) ? $page_meta["keywords"] : "" ?>">
		<meta name="description" content="<?= isset($page_meta["description"]) ? $page_meta["description"] : "" ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0;">
		<meta name="author" content="http://www.aycmedia.com" />
		<link rel="icon" href="favicon.ico" />
		<script src="js/libs/modernizr-2.6.2.min.js"></script>
		<?php $css_file = file_get_contents('./css/inline.css'); ?>
		<style><?php echo $css_file; ?></style>
		<script>
			/*!
			loadCSS: load a CSS file asynchronously.
			[c]2014 @scottjehl, Filament Group, Inc.
			Licensed MIT
			*/
			function loadCSS(a,b,c){"use strict";function g(){for(var b,e=0;e<f.length;e++)f[e].href&&f[e].href.indexOf(a)>-1&&(b=!0);b?d.media=c||"all":setTimeout(g)}var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),g(),d}
			var href = "css/global.css";
			loadCSS( href );
		</script>
		<noscript><link href="css/global.css" rel="stylesheet"></noscript>
		<?php /*<link async rel="stylesheet" href="css/global.css">*/ ?>
	</head>

	<body class="<?php print implode(" ", $body_class); ?>">
		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->
		<header class="left block">
			<div class="container">
				<h1>Responsive Theme Boilerplate</h1>
			</div><!--/container-->
		</header>
<?php
	// END HEADER
?>