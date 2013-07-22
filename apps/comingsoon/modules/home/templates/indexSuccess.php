<div id="contenedor">
	<div id="contentSections">
		<div id="nav"></div>
		<div id="countdown"></div>
		<p id="note"></p>        
		<div class="titleTwitear">Solt&aacute; tu lengua en Twitter este <strong style="font-size:26px;">12 de Noviembre</strong> y veamos qui&eacute;n la tiene m&aacute;s larga.</div>
		<div class="titleTwitear1">LANZAMIENTO MUNDIAL 12 DE NOVIEMBRE 2012</div> 
		<?php if($sf_user->isAuthenticated()): ?>
		<div class="textLogin">Ya est&aacute;s inscripto en el concurso, seguí a <a href="http://twitter.com/umargentina">@UMArgentina</a> para conocer todas las novedades del mismo.</div>
		<?php else: ?>
		<div class="btnEnviar"><a href="<?php echo url_for('twitter_signin') ?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','<?php echo image_path('btnTwitterOn.png') ?>',1)"><img src="<?php echo image_path('btnTwitter.png') ?>" width="247" height="60" id="Image1" /></a></div>
		<?php endif; ?>
        
        <div class="socialHeader">
			<div class="facebook"><div class="fb-send" data-href="http://quieroeldiscodelosrolling.com" data-font="arial"></div></div>
			<div class="twitter">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="  " data-text="En www.quieroeldiscodelosrolling.com están sorteando el último disco de @rollingstones #GRRR! Soltá tu lengua en twitter para participar" data-lang="es">Twittear</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
		<div class="line"></div>
		<div class="comoFunciona">¿C&oacute;mo funciona?</div> 
		<div class="pasos">
        	<ul>
            	<li style="width:150px;"><span class="numer">1</span> Conectá con <br />Twitter</li>
                <li style="width:320px;"><span class="numer">2</span> Us&aacute; el hashtag: <br /><strong>#quieroeldiscodelosrolling</strong><br />para sumar centimetros en tu lengua.</li>
                <li style="width:300px;"><span class="numer">3</span> Los <strong>15 participantes con la lengua mas larga</strong> ganan fabulosos <br />premios.</li>
            </ul>
        </div>
      	<div class="line1"></div>
      	<div class="copy">Argentina es el &uacute;nico pa&iacute;s que tiene una palabra para decir <br />“fan&aacute;tico de los Rolling Stones”: Rollinga.<br /><br />Mir&aacute; porque</div>
      	<div class="flecha"></div>
      	<div class="videos">
        	<ul>
            	<li><a class="youtube" title="Doom And Gloom" href="http://www.youtube.com/embed/rPFGWVKXxm0" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','<?php echo image_path('video1_over.png') ?>',1)"><img src="<?php echo image_path('video1.png') ?>" width="214" height="130" id="Image2" /></a><br /><br />Doom And Gloom</li>
                <li><a class="youtube" title="One More Shot" href="http://www.youtube.com/embed/iecBKNWn6hc" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','<?php echo image_path('video2_over.png') ?>',1)"><img src="<?php echo image_path('video2.png') ?>" width="214" height="130" id="Image3" /></a><br /><br />One More Shot</li>
                <li><a class="youtube" title="Salt of the earth 2" href="http://www.youtube.com/embed/qhS9HZMQBEU" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','<?php echo image_path('video4_over.png') ?>',1)"><img src="<?php echo image_path('video4.png') ?>" width="214" height="130" id="Image5" /></a><br /><br />Salt of the earth</li>
            </ul>
        </div>
        <div class="textFooter"><img style="margin:-5px 5px 0 0;" src="<?php echo image_path('logoUniversal.png')?>" width="93" height="30" />  Copyright Universal Music 2012 . Todos los derechos reservados</div>
		<div class="textBases"><a href="">Bases y condiciones</a></div>
        <div class="redesSociales"><img src="<?php echo image_path('imaRedes1.png')?>" width="926" height="55" usemap="#Map" border="0" />
        <map name="Map" id="Map">
          <area shape="rect" coords="164,18,300,31" href="http://facebook.com/universalmusicargentina" target="_blank" />
          <area shape="rect" coords="168,40,251,53" href="http://twitter.com/UMArgentina" target="_blank" />
          <area shape="rect" coords="365,19,456,31" href="http://facebook.com/therollingstones" target="_blank" />
          <area shape="rect" coords="366,41,446,53" href="http://twitter.com/RollingStones" target="_blank" />
          <area shape="rect" coords="472,42,544,54" href="http://twitter.com/MickJagger" target="_blank" />
          <area shape="rect" coords="568,40,639,53" href="http://twitter.com/officialKeef" target="_blank" />
          <area shape="rect" coords="660,41,767,54" href="http://twitter.com/RonnieWoodShow" target="_blank" />
          <area shape="rect" coords="791,39,853,53" href="http://twitter.com/grrregory" target="_blank" />
        </map>
      </div>
	</div>
    <div class="pixel"></div>
</div>