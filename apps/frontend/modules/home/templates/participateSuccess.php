<div class="wrap">
	<div class="header animated fadeInUp delay1"></div>
	<div class="texto1 animated fadeIn delay2"></div>
	<div class="puntos clearfix">
		<div class="punto1 animated bounceIn delay4">
			<a href="https://twitter.com/UMargentina" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large" data-show-screen-name="false">Seguir a @UMargentina</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<div class="punto2 animated bounceIn delay3"></div>
		<div class="punto3 animated bounceIn delay5"></div>
	</div>
	
	<div class="botones animated fadeInDown delay7">
		<?php if($sf_user->isAuthenticated()): ?>
		<a class="btn_tweet" href="#doTweetModal" data-toggle="modal">Participar</a>
		<?php else: ?>
		<a class="btn_tweet" href="<?php echo url_for('twitter_signin') ?>">Participar</a>
		<?php endif; ?>
		<a class="btn_disco" href="<?php echo url_for('album') ?>">Participar</a>
	</div>
	<div class="texto animated fadeInDown delay7"></div>
	<div class="logos">
		<img src="<?php echo image_path('logos.png')?>" usemap="#Map" border="0" />
  		<map name="Map" id="Map">
    		<area shape="rect" coords="-61,-16,100,51" href="http://www.universalmusic-conosur.com/" target="_blank" alt="Universal Music Argentina" />
    		<area shape="rect" coords="147,2,257,48" href="https://itunes.apple.com/ar/album/stars-dance/id656282129" target="_blank" alt="Disponible en Itunes" />
			<area shape="rect" coords="101,38,102,50" href="#" />
  			<area shape="rect" coords="294,-6,395,44" href="https://www.deezer.com/es/artist/292185" target="_blank" alt="Escucha a Selena Gomez en Deezer" />
  			<area shape="rect" coords="423,-4,469,44" href="https://www.facebook.com/Selena" target="_blank" alt="Hazte fan de Selena Gomez" />
  			<area shape="rect" coords="488,-1,532,47" href="https://twitter.com/selenagomez" target="_blank" alt="Sigue a Selena Gomez en Twitter" />
  		</map>
	</div>
	<div class="aclaracion">Concurso válido sólo en Argentina</div>
</div>
<div id="doTweetModal" class="modal cont_pop hide fade" tabindex="-1" role="dialog" aria-labelledby="doTweetModalLabel" aria-hidden="true">
	<a class="btn_close" href="#1" data-dismiss="modal" aria-hidden="true">cerrar</a>
	<form action="<?php echo url_for('participate') ?>" method="post" enctype="multipart/form-data">
		<label>
			<span>Tu mensaje</span>
			<?php echo $doTweetForm['_csrf_token']->render() ?>
			<?php echo $doTweetForm['text']->render() ?><br />						
		</label>
		<label>
			<span>Sube tu foto</span>
			<?php echo $doTweetForm['picture']->render() ?>
		</label>
		<button type="submit" class="btn_enviar">Enviar</button>
	</form>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#doTweetModal textarea").charCount({
		allowed: 115,
		counterElement: 'div',
		css: 'restante',
		counterText: 'Te quedan <strong>',
		counterTextEnd: '</strong> caracteres.'
	});	
});
</script>
