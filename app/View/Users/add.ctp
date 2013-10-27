<div class="contenido formulario" id="contenido">
	<header>
		<nav>
			<?php echo $this->Html->link("Registrarse", "/users/add", 
						array("class"=>"registro", "title"=>"Registrarse")); ?>
			<?php echo $this->Html->link("Entrar", "/users/login", 
						array("class"=>"entrar", "title"=>"Entrar")); ?>
		</nav>
		<a href="/ecoxixon" class="volver" title="Volver a Inicio"><h1><span class="verde">eco</span>Xixón</h1></a>
	</header>
	<h3>Crear nuevo usuario</h3>
	<form>
		<div class="users form">
			<?php echo $this->Form->create('User'); ?>
			    <?php echo $this->Form->input('username', array("label"=>"Nombre de usuario"));
				echo $this->Form->input('email', array("label"=>"Correo electrónico"));
       			echo $this->Form->input('password', array("label"=>"Contraseña"));
    			?>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</form>
	<p>
		Si ya tienes cuenta, inicia sesión 
		<?php echo $this->Html->link("aquí", "/users/login", 
						array("title"=>"Entrar")); ?>
	</p>
</div>
<?php
echo $this->Html->script("formulario");
echo $this->Html->script("nubes");
?>