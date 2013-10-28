<div class="contenido formulario" id="contenido">
	<header>
		<?php echo $this->element("menu"); ?>
		<a href="/ecoxixon" class="volver" title="Volver a Inicio"><h1>
				<span class="verde">eco</span>Xixón
			</h1></a>
	</header>
	<div class="cuerpo">
		<h3>Crear nuevo usuario</h3>
		<div class="users form">
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->input('nombre', array("label"=>"Nombre"));
			    echo $this->Form->input('apellidos', array("label"=>"Apellidos"));
			    echo $this->Form->input('username', array("label"=>"Nombre de usuario"));
				echo $this->Form->input('email', array("label"=>"Correo electrónico"));
       			echo $this->Form->input('password', array("label"=>"Contraseña"));
    			?>
			<?php echo $this->Form->end(__('Registrar')); ?>
		</div>
		<p>
			Si ya tienes cuenta, inicia sesión
			<?php echo $this->Html->link("aquí", "/users/login", 
						array("title"=>"Entrar")); ?>
		</p>
	</div>
</div>
<?php
echo $this->Html->script("formulario");
echo $this->Html->script("nubes");
?>