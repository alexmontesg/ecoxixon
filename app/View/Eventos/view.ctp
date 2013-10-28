<div class="contenido">
	<header>
		<?php echo $this->element("menu"); ?>
		<a href="/ecoxixon" class="volver" title="Volver a Inicio"><h1>
				<span class="verde">eco</span>Xixón
			</h1></a>
	</header>
	<?php echo $this->element("letrero"); ?>

	<div class="cuerpo">
		<a href="javascript:void(0)" onclick="javascript:history.back();" 
			title="Volver" class="volver">&lt;&lt; Volver</a>
		<h3>
			<?php echo utf8_encode($evento['Evento']['name']); ?>
		</h3>
		<table class="eventos">
			<tbody>
				<tr>
					<td class="categoria class_cat_<?php echo $evento['EventosCategoria'][0]['Categoria']['id']; ?>">
						<?php echo utf8_encode($evento['EventosCategoria'][0]['Categoria']['name']); ?>

					</td>
					<td class="descripcion">
						<?php echo utf8_encode($evento['Evento']['descripcion']); ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="puntos">
			<?php echo $this->Html->image("pelayin.png", array("class"=>"pelayin")); ?>
			<p id="mis-puntos" class="mis-puntos"><?php echo round($evento['Evento']['puntuacion'], 2); ?> Pelayinos</p>
		</div>
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
		echo $this->Html->script("nubes");
		?>
