<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include_http_metas() ?>
    	<?php include_metas() ?>
    	<?php include_title() ?>

    	<meta name="viewport" content="width=320;initial-scale=1.0; minimum-scale=1.0;maximum-scale=1.0; user-scalable=1;"/>
    	
    	<link rel="shortcut icon" type="image/x-icon" href="<?php echo public_path('favicon.ico') ?>">
    	
    	<?php include_stylesheets() ?>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	</head>
	<body style="margin:0; background:0;">
		<div><img src="<?php echo image_path('img_01.jpg')?>" width="100%"/></div>
		<div><img src="<?php echo image_path('img_02.jpg')?>" width="100%"/></div>
		<div><img src="<?php echo image_path('img_03.jpg')?>" width="100%"/></div>
		<div>
			<a href="https://www.twitter.com/intent/tweet?text=<?php echo urlencode("#EstrenoStarsDanceAr ")?>" style="border:0"><img style="border:0" src="<?php echo image_path('img_04.jpg')?>" width="100%"/></a>
		</div>
		<div><img src="<?php echo image_path('img_05.jpg')?>" width="100%"/></div>
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