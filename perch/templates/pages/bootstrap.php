<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php perch_pages_title(); ?></title>

	<?php perch_page_attributes(); ?>

	<?php perch_get_css(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="icon" href="/favicon.ico">
</head>
<body>
    <h1><?php perch_content('Main heading'); ?></h1>

    <?php perch_pages_navigation(array('levels'=>1)); ?>

    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    			<h1 class="text-center">Hello Bootstrap World</h1>
    		</div>
    	</div>
    </div>
    
    <?php perch_content('Intro'); ?>

    <?php perch_get_javascript(); ?>
</body>
</html>