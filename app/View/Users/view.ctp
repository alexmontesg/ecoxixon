<div class="contenido">
			<header>
				<nav>
					<?php echo $this->Html->link("Cerrar sesión", "/Users/logout", array("class"=>"entrar")); ?>
				</nav>
				<a href="/ecoxixon" class="volver" title="Volver a Inicio"><h1><span class="verde">eco</span>Xixón</h1></a>
			</header>
			<div class="privado">
				Zona Privada
			</div>
			<div class="cuerpo">
				<?php echo $this->Html->image("pelayu.png", array("class"=>"imagen-perfil")); ?>
				<div class="info">
					<h3 class="nombre"><?php echo utf8_encode($user['User']['nombre']." ".$user['User']['apellidos']); ?></h3>
					<p>
						Correo electrónico: <?php echo $user['User']['email']; ?>
					</p>
					<p>
						Fecha de alta: <?php echo date("d-m-Y", strtotime($user['User']['created'])); ?>
					</p>
				</div>
				<div class="puntos">
					<img class="pelayin" src="img/pelayin.png" alt="" /> 
					<p id="mis-puntos" class="mis-puntos">350 Pelayinos</p>
				</div>
				<br />
				<h3>Eventos completados</h3>
				<table class="eventos pages">
					<tbody>
						<tr>
							<td class="categoria eco">
								eco
							</td>
							<td class="descripcion">
								Evento organizado por el ayuntamiento de Gijón
								para la concienciación del ahorro energécio en
								los hogares.							
							</td>
							<td class="fecha">
								30 Sep 2013
								<br />
								18:32
							</td>
						</tr>
						<tr>
							<td class="categoria deporte">
								dep
							</td>
							<td class="descripcion">
								Carrera de San Silvestre 2012							
							</td>
							<td class="fecha">
								31 Dic 2012
								<br />
								18:32
							</td>
						</tr>
					</tbody>
				</table>
				<h3 class="historico">Histórico</h3>
				<div id="historico" class="grafica">
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
		echo $this->Html->script("jGraf.min");
		echo $this->Html->script("Grafico");
		echo $this->Html->script("perfil");
		echo $this->Html->script("nubes");
		?>
