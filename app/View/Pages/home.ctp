<p>Esta es la página de incio</p>
<div id="div_login_inicio">
	<?php
	if(!is_null($user)){
		echo $this->element("users/box_logged");
	}else{
		echo $this->element("users/login");
	}
	?>
</div>