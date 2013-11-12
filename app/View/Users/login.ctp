<div class="contenido formulario" id="contenido">
	<header>
		<?php echo $this->element("menu"); ?>
		<a href="/" class="volver" title="Volver a Inicio"><h1>
				<span class="verde">eco</span>Xixón
			</h1></a>
	</header>
	<div class="cuerpo">
		<h3>Iniciar sesión</h3>
		<?php echo $this->element("users/login"); ?>
		<p>
			Si no tienes cuenta, puedes crearla
			<?php echo $this->Html->link("aquí", "/users/add", 
						array("title"=>"Registrar nueva cuenta de usuario")); ?>
		</p>
	</div>
</div>
<?php
echo $this->Html->script("formulario");
echo $this->Html->script("nubes");
?>


