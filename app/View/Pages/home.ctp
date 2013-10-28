<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<div class="contenido">
<header>
	<?php echo $this->element("menu"); ?>
	<h1><span class="verde">eco</span>Xixón</h1>
</header>
<?php echo $this->element("letrero"); ?>
<div class="cuerpo">
	<h3>¿Qué es?</h3>
	<p>Visualización de datos medioambientales de la ciudad de 
Gijón, Eventos que tienen lugar en el municipio enriquecidos 
con una asiganción de niveles de "ecoCalidad". Original juego 
de puntuaciones y recompensas implicando al ciudadano en 
comportamiemtos ecologicos.
		¿Nos ayudas?</p>
	<h3>Eventos</h3>
	<?php if(isset($eventos) && !empty($eventos)){ ?>
		<table class="eventos pages">
			<tbody>
				<?php $caracteres=200; ?>
				<?php foreach($eventos as $e){ ?>
				<tr>
					<td class="categoria class_cat_<?php echo $e['Categoria'][0]['id']; ?>">
						<?php echo utf8_encode($e['Categoria'][0]['name']); ?>
						
					</td>
					<td class="descripcion">
						<?php echo $this->Html->link(utf8_encode($e['Evento']['name']), 
							"/eventos/view/".$e['Evento']['id'],
							array("class"=>"bold", "title"=>"Más información")); ?><br/>
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
	
	<h3>Eventos en tu ciudad</h3>
	<div id="map-canvas" class="mapa">Mapa de Google Maps</div>
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
<script type="text/javascript">
	function initialize() {
		var myLatlng = new google.maps.LatLng(43.540709,-5.663996);
		var mapOptions = {
			zoom : 13,
			center: myLatlng,
			mapTypeId : google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(document.getElementById('map-canvas'),
				mapOptions);
		var k=0;
		var marker=new Array();
		var infowindow=new Array();
			<?php foreach($eventos as $e){ ?>
				<?php if(!empty($e['Evento']['localizacion'])){ ?>
				var latlng = <?php echo 'new google.maps.LatLng('.str_replace(" ", ", ", $e['Evento']['localizacion']).');'; ?>
				marker[k] = new google.maps.Marker({
					position : latlng,
					map : map,
					title : '<?php echo utf8_encode(str_replace("\n", '', $e['Evento']['name'])); ?>'
				});
				k++;
				<?php } ?>
			<?php } ?>
	}
	initialize();
</script>
