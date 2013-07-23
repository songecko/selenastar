<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_http_metas() ?>
    	<?php include_metas() ?>
    	<?php include_title() ?>
    	
    	<link rel="shortcut icon" type="image/x-icon" href="<?php echo public_path('favicon.ico') ?>">
    	
    	<?php include_stylesheets() ?>
	</head>
	<body>
		<div class="wrap">
			<?php echo $sf_content ?>			
		</div>
	</body>
</html>
