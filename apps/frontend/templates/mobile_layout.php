<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <?php include_title() ?>
    
	<link rel="shortcut icon" href="http://wwwrollingstones.wpengine.netdna-cdn.com/wp-content/themes/rolling-stones-2012/img/fav/favicon.ico?ver=38" />

	<link href="<?php echo _compute_public_path('mobile.css', 'css', 'css') ?>" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript">
    window.addEventListener("load",function() {
      setTimeout(function(){
        window.scrollTo(0, 1);
      }, 0);
    });
	</script>	
  </head>
  <body>
    <?php echo $sf_content ?>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-36234528-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
  </body>
</html>