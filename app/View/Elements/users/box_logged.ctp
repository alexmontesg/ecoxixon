<div class="users form">
	<p>Bienvenido, 
		<?php echo $this->Html->link(utf8_encode($user['nombre']), 
									"/Users/view/".$user['id']); ?>
	</p>
	<p><?php echo $this->Html->link("Salir", "/Users/logout"); ?></p>
</div>