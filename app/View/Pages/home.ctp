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
	<?php if(isset($eventos) && !empty($eventos)){ ?>
		<table class="eventos pages">
			<tbody>
				<?php $caracteres=300; ?>
				<?php foreach($eventos as $e){ ?>
				<tr>
					<td class="categoria class_cat_<?php echo $e['Categoria'][0]['id']; ?>"><?php echo utf8_encode($e['Categoria'][0]['name']); ?></td>
					<td class="descripcion">
					<?php
					echo substr(utf8_encode($e['Evento']['descripcion']), 0, $caracteres); 
					echo (strlen($e['Evento']['descripcion'])>$caracteres)?"...":"";
					?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	<?php } ?>
			
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
			<span>Agradecimientos</span> <br /> <br /> <a class="institucion"
				href="http://www.fundacionctic.org" target="_blank"> <?php echo $this->Html->image("ctic.png"); ?>
			</a> <a class="institucion" href="http://www.gijon.es" target="_blank">
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