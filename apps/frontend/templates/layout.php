<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_http_metas() ?>
    	<?php include_metas() ?>
    	<?php include_title() ?>

    	<link rel="shortcut icon" type="image/x-icon" href="<?php echo public_path('favicon.ico') ?>">
    	
    	<?php include_stylesheets() ?>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	</head>
	<body>
		<?php echo $sf_content ?>				
		
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script src="<?php echo public_path('js/charCount.js')?>"></script>
	</body>
</html>