<?php use_helper('Text') ?>
<div id="ranking">
	<div id="contentSections">
       	<!-- Tweet module header -->
		<?php include_component('home', 'header', array('module' => 'ranking')) ?>
		
        <div class="contentRankingIz">
			<div class="titleRanking">Ranking</div>
			<div class="twitNumberRanking">(Actualiza cada 5 minutos)</div>
			<div class="textRanking">Se uno de los primeros 15 participantes y ganate uno de los premios que incluyen, DVD, nuevo disco y demás galardones stones.</div> 
        	<div class="userRanking">
        		<?php $i=0; ?>
        		<?php foreach ($rankingUsers as $rankingUser): $i++; ?>
        		<div class="avatarUserRanking">
        			<div class="numberUserRanking">#<?php echo $rankingUser->getRankingPosition() ?></div>
                  	<div class="imagenUserRanking"><img src="<?php echo $rankingUser->getSocialPicture(); ?>" width="95" height="94" /></div>
                  	<div class="nombreUserRanking"><?php echo truncate_text($rankingUser->getSocialName(), 12) ?></div>
                  	<div class="twitNumberRanking"><?php echo $rankingUser->Profile->getPoints() ?> Centímetros</div>
               	</div>
               	<?php if($i%5 == 0 || $i%10 == 0): ?>
              	<div><img src="<?php echo image_path('divisor.png') ?>" width="625" height="1" /></div>
              	<?php endif; ?>
               	<?php endforeach; ?>
   		  	</div>
        </div>
        <div class="contentRankingDe">
           	<div class="tweetXtweet"></div>
        	<div class="campoTwitter">
	        	<a class="twitter-timeline" href="https://twitter.com/search?q=%23quieroeldiscodelosrolling" data-widget-id="265922164627214336">Tweets sobre "#quieroeldiscodelosrolling"</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="lenguaRanking"></div>
            <div class="hastagRanking">Us&aacute; el hashtag <br /><span style="color:#ff2700;">#quieroeldiscodelosrolling</span></div>
            <div class="hastagUniversal"></div>
            <div class="codigo">
	            <form class="form" method="post" action="<?php echo url_for('send_promo_code') ?>" id="promoCodeForm">
					<?php echo $promoCodeForm['_csrf_token']->render() ?>
					<?php echo $promoCodeForm['code']->render(array('class'=>'inputCode')) ?>
				</form>
	            <a href="#" onclick="$('#promoCodeForm').submit();return false;"><img src="<?php echo image_path('btnEnviar.png') ?>" width="95" height="30" /></a>
           	</div>
        </div>
        <div class="footerSection2">
       		<div class="gorilla"></div>
           	<div class="textGorilla">Ayudanos para que el hashtag <span class="colorhastag" >#Quieroeldiscodelosrolling</span> sea TT</div>
       	</div>
	</div> 	
    <div class="pixel"></div>
</div>