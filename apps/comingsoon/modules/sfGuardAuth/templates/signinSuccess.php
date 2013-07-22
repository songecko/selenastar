<?php slot('fondo') ?>
<div class="fondo4"></div>
<?php end_slot() ?>
<div class="cuerpo centrar7">
	<div class="formulario login">
		<div class="moduloCentro">
			<div class="titulo2">
				<p>ingresá a tu cuenta</p>
			</div>
			<div class="cuerpo">
				<form class="form" method="post" action="<?php echo url_for('sf_guard_signin') ?>">
					<a href="<?php echo url_for('twitter_signin') ?>" class="tw2">
						<div class="icono"></div>
						<p>ingresá con tu cuenta de <b>twitter</b></p>
					</a>
					<div class="input<?php echo $form['username']->hasError()?' error':'' ?>">
						<p>E-mail</p>
						<?php echo $form['_csrf_token']->render() ?>
						<?php echo $form['username']->render() ?>
					</div>
					<div class="input<?php echo $form['password']->hasError()?' error':'' ?>">
						<p>Contraseña</p>
						<?php echo $form['password']->render() ?>
					</div>
					<a class="link3" href="<?php echo url_for('sf_guard_forgot_password') ?>">Olvidé mi contraseña</a>
					<a href="<?php echo url_for('create_profile') ?>" style="text-decoration:none;"><input class="btn2" type="button" value="registrarme" /></a> 
					<input class="btn3" type="submit" value="ingresar" />
				</form>
			</div>
			<div class="legales">
				<a class="izq" href="<?php echo url_for('terms') ?>">TÉRMINOS Y CONDICIONES</a>
			</div>
		</div>
	</div>
</div>
<?php if($sf_user->hasFlash('notice') || $sf_user->hasFlash('error')): ?>
<script type="text/javascript">
$(document).ready(function()
{
	$(window).qtip(
	{
		id: 'modal', // Since we're only creating one modal, give it an ID so we can style it
		content: {
			text: '<?php echo $sf_user->getFlash('notice') ?>',
			title: {
				text: '<?php echo ($sf_user->hasFlash('notice'))?'Mensaje':'Error' ?>',
				button: true
			}
		},
		position: {
			my: 'center', // ...at the center of the viewport
			at: 'center',
			target: $(window)
		},
		show: {
			event: false,
			solo: true, // ...and hide all other tooltips...
			ready: true,
			modal: true // ...and make it modal
		},
		hide: false,
		style: 'ui-tooltip-<?php echo ($sf_user->hasFlash('notice'))?'light':'red' ?> ui-tooltip-shadow'
	});
});
</script>
<?php endif; ?>