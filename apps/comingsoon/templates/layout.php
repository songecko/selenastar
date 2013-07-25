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
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-36234528-2', 'starsdanceargentina.com');
		  ga('send', 'pageview');		
		</script>
	</body>
</html>
