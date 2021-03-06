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
	
	<h3>Eventos en tu ciudad</h3>
	<div id="map-canvas" class="mapa">Mapa de Google Maps</div>
			
	<h3>¿Por qué ser verde?</h3>
	<p>
	 Afecta a todos los cuerpos planetarios rocosos dotados de atmósfera. 
	 Este fenómeno evita que la energía recibida constantemente vuelva 
	 inmediatamente al espacio, produciendo a escala planetaria un efecto 
	 similar al observado en un invernadero.
	 El efecto invernadero se está viendo acentuado en la Tierra por la 
	 emisión de ciertos gases, como el dióxido de carbono y el metano, 
	 debido a la actividad humana. 
	 <small><?php echo $this->Html->link("Wikipedia.org", "http://es.wikipedia.org/wiki/Efecto_invernadero", array("title"=>"wikipedia.org", "target"=>"_blank")); ?></small>
	</p>
	<p>
	Las futuras Smart Cities deben ser conscientes de este hecho y realizar una
	tarea pedagógica con sus ciudadanos con el objetivo de conseguir un futuro
	sostenible para todos.
	</p>
		
	<h3>Niveles de CO2 en Gijón</h3>
	<div id="grafica1" class="grafica"></div>
	
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
		echo $this->Html->script("datos");
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
