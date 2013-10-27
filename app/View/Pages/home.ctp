
<!-- <p>Esta es la página de incio</p>
<div id="div_login_inicio">
	<?php
	if(!is_null($user)){
		echo $this->element("users/box_logged");
	}else{
		echo $this->element("users/login");
	}
	?>
</div> -->
<div class="contenido">
<header>
				<nav>
					<?php echo $this->Html->link("Registrarse", "/users/add", 
						array("class"=>"registro", "title"=>"Registrarse")); ?>
					<?php echo $this->Html->link("Entrar", "/users/login", 
						array("class"=>"entrar", "title"=>"Entrar")); ?>
				</nav>
				<h1><span class="verde">eco</span>Xixón</h1>
			</header>
<div class="letrero">
	<div class="columna">
		<?php echo $this->Html->image("eco.png", array("class"=>"circulo")); ?>
		Sé ecológico
	</div>
	<div class="columna">
		<?php echo $this->Html->image("nube.png", array("class"=>"circulo")); ?>
		Compártelo
	</div>
	<div class="columna">
		<?php echo $this->Html->image("pelayin.png", array("class"=>"circulo")); ?>
		Gana puntos
	</div>
</div>
<div class="cuerpo">
	<h3>¿Qué es?</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
		auctor, velit in tristique mollis, enim ipsum iaculis erat, in
		facilisis metus neque quis nibh. Proin sit amet augue ac dolor
		vulputate tristique. Nulla sit amet leo non risus luctus imperdiet.
		¿Nos ayudas?</p>
	<h3>Eventos</h3>
	<table class="eventos pages">
		<tbody>
			<tr>
				<td class="categoria eco">eco</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria deporte">dep</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria arte">arte</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria cultura">cul</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria eco">eco</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria deporte">dep</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria arte">arte</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria cultura">cul</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria eco">eco</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria deporte">dep</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria arte">arte</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria cultura">cul</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria eco">eco</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria deporte">dep</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria arte">arte</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria cultura">cul</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria eco">eco</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria deporte">dep</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria arte">arte</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
			<tr>
				<td class="categoria cultura">cul</td>
				<td class="descripcion">Lorem ipsum dolor sit amet, consectetur
					adipiscing elit. Sed auctor, velit in tristique mollis, enim ipsum
					iaculis erat.</td>
			</tr>
		</tbody>
	</table>
	<h3>¿Por qué ser verde?</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
		auctor, velit in tristique mollis, enim ipsum iaculis erat, in
		facilisis metus neque quis nibh. Proin sit amet augue ac dolor
		vulputate tristique. Nulla sit amet leo non risus luctus imperdiet.</p>
	<div id="grafica1" class="grafica"></div>
	<div class="mapa">Mapa de Google Maps</div>
</div>
<footer>
	            <div class="columna festival">
	            	<a href="http://www.fundacionctic.org/odlabgijon" target="_blank">
	            		<?php echo $this->Html->image("festival.png"); ?>
	            	</a>
	            </div>
	            <div class="columna">
	            	<span>Agradecimientos</span>
	            	<br />
	            	<br />
	            	<a class="institucion" href="http://www.fundacionctic.org" target="_blank">
	            		<?php echo $this->Html->image("ctic.png"); ?>
	            	</a>
	            	<a class="institucion" href="http://www.gijon.es" target="_blank">
	            		<?php echo $this->Html->image("ayuntamiento.png"); ?>
	            	</a>
	            </div>
	            <div class="columna logo">
	            	<?php echo $this->Html->image("logo.png"); ?>
	            	Idea original de alguien
	            </div>
			</footer>
</div>
<?php
		echo $this->Html->script("richTable");
		echo $this->Html->script("jGraf.min");
		echo $this->Html->script("Grafico");
		echo $this->Html->script("graficas");
		echo $this->Html->script("nubes");
		?>