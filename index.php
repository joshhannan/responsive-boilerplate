<?
	// HOME PAGE

	// page vars
	$page_meta = array(
		"title" => "Home",
		"keywords" => "",
		"description" => ""
	);
	$body_class = array(
		"page" => "pg_home",
		"site_section" => "home",
		"layout" => ""
	);
	$slides = array(
		array(
			"title" => "Title",
			"image" => "/images/slide_01.jpg",
			"category" => "Category 1",
			"content" => "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper."
		),
		array(
			"title" => "Title",
			"image" => "/images/slide_02.jpg",
			"category" => "Category 2",
			"content" => "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper."
		),
		array(
			"title" => "Title",
			"image" => "/images/slide_03.jpg",
			"category" => "Category 3",
			"content" => "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Etiam porta sem malesuada magna mollis euismod.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper."
		)
	);
	include("includes/header.php");
?>
	<section class="banner block">
<?php
	if( !empty($slides) ) :
		foreach( $slides as $slide ) :
			extract($slide);
?>
		<div class="slide block">
			<div class="image"><img src="/images/slide_01.jpg" /></div><!--/image-->
			<div class="text">
				<div class="container">
					<h1><?php echo $title; ?></h1>
				</div><!--/container-->
			</div><!--/text-->
		</div><!--/slide-->
<?php
		endforeach;
	endif;
?>
	</section><!--/block-->
	<section class="intro block">
		<div class="container">
			<div class="content block">
				<h2>We are a group of event professionals.</h2>
				<p>Duis id dolor lacus. Mauris ut risus dapibus, malesuada ex sed, molestie turpis. Suspendisse potenti. Nullam malesuada nisi felis, sit amet condimentum arcu condimentum a. Nunc imperdiet vel ante a congue. Nulla suscipit eleifend convallis. Vivamus ullamcorper eros vel elit luctus placerat. Aenean placerat arcu metus. Vivamus vitae enim in libero congue molestie. Sed ullamcorper magna et suscipit auctor. Nulla vestibulum faucibus feugiat.</p>
			</div><!--/content-->
		</div><!--/container-->
	</section><!--/intro-->
<?php
	include("includes/footer.php");
?>