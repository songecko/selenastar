<?php if($sf_user->isAuthenticated()): ?>
<div class="avatarHeader">
	<div class="imagenHeader"><img src="<?php echo $user->getSocialPicture(); ?>" width="38" height="38" /></div>
	<div class="numberHeader">#<?php echo $user->getRankingPosition() ?></div>
	<div class="nombreHeader"><?php echo $user->getSocialName() ?></div>
	<div class="twitNumberHeader"><?php echo $user->Profile->getPoints() ?> Cent&iacute;metros</div>
</div>       
<?php endif; ?> 
<div class="socialHeader">
	<div class="facebook"><div class="fb-send" data-href="http://quieroeldiscodelosrolling.com" data-font="arial"></div></div>
	<div class="twitter">
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="  " data-text="En www.quieroeldiscodelosrolling.com están sorteando el último disco de @rollingstones #GRRR! Soltá tu lengua en twitter para participar" data-lang="es">Twittear</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
	<!-- <div class="compartir">compartir</div> -->
</div>
<div id="nav" class="nav">
	<div class="btnIz">
		<ul>
			<li <?php echo ($module == 'tweet')?'class="navSelect"':'href="#twitear" class="clickAnimate"'?>>TWITEAR</li>
			<li <?php echo ($module == 'ranking')?'class="navSelect"':'href="#ranking" class="clickAnimate"'?>>RANKING</li>
		</ul>
	</div>            
	<div class="btnDe">
		<ul>
			<li <?php echo ($module == 'premios')?'class="navSelect"':'href="#premios" class="clickAnimate"'?>>PREMIOS</li>
			<li <?php echo ($module == 'grrr')?'class="navSelect"':'href="#grrr" class="clickAnimate"'?>>GRRR!</li>
		</ul>
	</div>
</div>
<div class="<?php echo $indicatorClass ?>"></div>