<div class="wrap">
	<div class="header animated fadeInUp delay1">
	</div>
	<div class="puntos clearfix">
		<div class="punto1 animated bounceIn delay3">
			<a href="https://twitter.com/UMargentina" class="twitter-follow-button" data-show-count="false" data-lang="es" data-size="large" data-show-screen-name="false">Seguir a @UMargentina</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<div class="punto2 animated bounceIn delay2"></div>
		<div class="punto3 animated bounceIn delay4"></div>
	</div>
	<div class="texto animated fadeInDown delay5">
	</div>
	<div class="botones">
		<?php if($sf_user->isAuthenticated()): ?>
		<a class="btn_tweet" href="#doTweetModal" data-toggle="modal">Participar</a>
		<?php else: ?>
		<a class="btn_tweet" href="<?php echo url_for('twitter_signin') ?>">Participar</a>
		<?php endif; ?>
		<a class="btn_disco" href="<?php echo url_for('album') ?>">Participar</a>
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