<div class="users form">
	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User', array("action"=>"/login")); ?>
	   	<?php echo $this->Form->input('username', array("label"=>"Correo electrónico"));
        	echo $this->Form->input('password', array("label"=>"Contraseña"));
    	?>
	<?php echo $this->Form->end(__('Entrar')); ?>
</div>