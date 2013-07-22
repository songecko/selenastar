<div class="cuerpo centrar2">
	<div class="formulario register">
		<div class="moduloCentro">
			<div class="cuerpo">
				<div class="logo"></div>
				<form class="form" method="post" action="<?php echo url_for('create_profile') ?>">
					<div class="col1">
						<div class="input<?php echo $form['email_address']->hasError()?' error':'' ?>">
							<?php echo $form['email_address']->renderLabel('E-mail') ?>
							<?php echo $form['email_address']->render(array('tabindex' => 1)) ?>
						</div>
						<div class="input<?php echo $form['first_name']->hasError()?' error':'' ?>">
							<?php echo $form['_csrf_token']->render() ?>
							<?php echo $form['id']->render() ?>
							<?php if(isset($form['user_id'])): ?>
							<?php echo $form['user_id']->render() ?>
							<?php endif; ?>
							
							<?php echo $form['first_name']->renderLabel('Nombre y apellido') ?>
							<?php echo $form['first_name']->render(array('tabindex' => 3)) ?>
						</div>						
						<div class="input<?php echo $form['phone_number']->hasError()?' error':'' ?>">
							<?php echo $form['phone_number']->renderLabel('Teléfono') ?>
							<?php echo $form['phone_number']->render(array('tabindex' => 5)) ?>
						</div>
						<div class="input<?php echo $form['password']->hasError()?' error':'' ?>">
							<?php echo $form['password']->renderLabel('Contraseña') ?>
							<?php echo $form['password']->render(array('tabindex' => 7)) ?>
						</div>						
					</div>
					<div class="col1 sinMargenDer">
						<div class="input<?php echo $form['email_address_again']->hasError()?' error':'' ?>">
							<?php echo $form['email_address_again']->renderLabel('Repetí tu e-mail') ?>
							<?php echo $form['email_address_again']->render(array('tabindex' => 2)) ?>
						</div>
						
						<div class="input<?php echo $form['dni']->hasError()?' error':'' ?>">
							<?php echo $form['dni']->renderLabel('DNI') ?>
							<?php echo $form['dni']->render(array('tabindex' => 4)) ?>
						</div>
						<div class="input<?php echo $form['birth_date']->hasError()?' error':'' ?>">
							<?php echo $form['birth_date']->renderLabel('Fecha de nacimiento') ?>
							<?php echo $form['birth_date']->render(array('tabindex' => 6)) ?>
						</div>
						<div class="input<?php echo $form['password_again']->hasError()?' error':'' ?>">
							<?php echo $form['password_again']->renderLabel('Repetí tu contraseña') ?>
							<?php echo $form['password_again']->render(array('tabindex' => 8)) ?>
						</div>	
					</div>
					
					<input type="submit" class="btn1" value="siguiente" tabindex="9" />
				</form>				
			</div>
			<div class="legales">
				<a class="izq" href="<?php echo url_for('terms') ?>">TÉRMINOS Y CONDICIONES</a>
			</div>
		</div>
	</div>
</div>