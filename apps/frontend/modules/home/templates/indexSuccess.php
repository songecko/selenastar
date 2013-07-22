<div class="header">
	<a class="btn_trans" href="index.html">volver</a>
	<a class="btn_participar" href="<?php echo url_for('participate') ?>">Participar</a>
</div>
<div class="container">
	<div class="disc">
		<ul>
			<?php $i=0; ?>
        	<?php foreach ($users as $user): $i++; ?>
			<li class="avatar bg<?php echo $i ?>"> 
				<a href="#1">
					<span>
						<img src="<?php echo $user->getSocialPicture() ?>" />
						<div class="user"><?php echo $user->getSocialName() ?><p>click para ver el mensaje</p></div>
					</span>
				</a> 
			</li>    
			<?php endforeach;?>
		</ul>
	</div>
</div>