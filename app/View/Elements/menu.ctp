<nav>
	<?php
	if(!$logeado){
		echo $this->Html->link("Registrarse", "/users/add", 
						array("class"=>"registro", "title"=>"Registrarse"));
		echo $this->Html->link("Entrar", "/users/login", 
			array("class"=>"entrar", "title"=>"Entrar")); 
	}else{
		echo $this->Html->link("Perfil", "/users/view/".$user['id'], 
			array("class"=>"entrar", "title"=>"Entrar en tu perfil")); 
	}
	?>
</nav>