<?php use_helper('Text') ?>
<div id="twitear">
	<div id="contentSections">
		<!-- Tweet module header -->
		<?php include_component('home', 'header', array('module' => 'tweet')) ?>
				
        <div class="titleTwitear">Solt&aacute; tu lengua ac&aacute; y veamos qui&eacute;n la tiene m&aacute;s larga.<img src="<?php echo image_path('flecha1.png') ?>" width="29" height="62" /></div>
        <form action="<?php echo url_for('send_tweet') ?>" id="sendTweetForm" method="post">
	        <div class="campoTwit">
	        	<?php echo $form['_csrf_token']->render() ?>
	        	<?php echo $form['user_id']->render() ?>
	        	<?php echo $form['text']->render() ?>
        	</div>	  
		</form>
		<?php if($sf_user->isAuthenticated()): ?>        
        <div class="avatar">
        	<div class="number">#<?php echo $user->getRankingPosition() ?></div>
          	<div class="imagen"><img src="<?php echo $user->getSocialPicture(); ?>" width="128" height="126" /></div>
          	<div class="nombre"><?php echo $user->getSocialName() ?></div>
          	<div class="twitNumber"><?php echo $user->Profile->getPoints() ?> Centímetros</div>
        </div>
        <?php endif; ?>
      	<div class="hastag">Usá el hashtag <span class="colorhastag" >#quieroeldiscodelosrolling</span></div>
      	<?php if($sf_user->isAuthenticated()): ?>
        <div class="btnEnviar"><a href="#" onclick="$('#sendTweetForm').submit();return false;"><img src="<?php echo image_path('btnSendTwitter.png') ?>" width="223" height="54" /></a></div>
        <?php else: ?>
        <div class="btnEnviar"><a href="<?php echo url_for('twitter_signin') ?>"><img src="<?php echo image_path('btnIniciarSesion.png') ?>" width="223" height="54" /></a></div>
        <?php endif; ?>
        
		<div class="topFive">
			<div class="textopFive">As&iacute; est&aacute; el <span class="colortopFive" >top five</span></div>
			<div style="text-align:center;">
				<a href="#ranking" class="clickAnimate"><img src="<?php echo image_path('btnRanking.png') ?>" width="221" height="41" /></a>
			</div>
			<div class="nombre">(Actualiza cada 5 minutos)</div>
		</div>
		<div class="flechaTopFive"></div>
        
       	<div class="avatares">
       		<?php foreach ($rankingUsers as $rankingUser): ?>
           	<div class="avatarTopFive">
           		<div class="number1">#<?php echo $rankingUser->getRankingPosition() ?></div>
           		<div class="imagen1"><img src="<?php echo $rankingUser->getSocialPicture(); ?>" width="95" height="94" /></div>
           		<div class="nombre"><?php echo truncate_text($rankingUser->getSocialName(), 12) ?></div>
           		<div class="twitNumber"><?php echo $rankingUser->Profile->getPoints() ?> Centímetros</div>
           	</div>
          	<?php endforeach; ?>
    	</div>
    	<div class="footerSection1">
    		<div class="gorilla"></div>
          	<div class="textGorilla">Ayudanos para que el hashtag <span class="colorhastag" >#Quieroeldiscodelosrolling</span> sea TT</div>
    	</div>
    </div>
    <div class="pixel"></div>
</div>