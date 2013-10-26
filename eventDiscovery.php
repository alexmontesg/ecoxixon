<?php
$db_name = 'ecoxixon';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db = new mysqli($db_host, $db_user, $db_pass, $db_name) or die('error with connection');
if (isset($_POST['load_url'])) {
	$dom = new DOMDocument;
	$dom -> loadXML(file_get_contents($_POST['data_url']));
	$_SESSION['xml'] = $dom;
	$categories = $dom -> getElementsByTagName('categoria');
	$catArr = array();
	$catInDB = array();
	$query = $db -> query("SELECT nombre FROM categorias");
	while ($row = $query -> fetch_object()) {
		array_push($catInDB, $row -> nombre);
	}
	foreach ($categories as $category) {
		if (!in_array($category -> nodeValue, $catArr) && !in_array($category -> nodeValue, $catInDB)) {
			array_push($catArr, $category -> nodeValue);
		}
	}
	if(empty($catArr)) {
		addEvents($db);
	}
} else if (isset($_POST['add_categories'])) {
	$i = 0;
	foreach ($_POST['category'] as $category) {
		$ecoQuality = $_POST['ecoQuality'][$i++];
		$category = $db -> real_escape_string($category);
		$ecoQuality = $db -> real_escape_string($ecoQuality);
		$query = $db -> query("INSERT INTO categorias (nombre, puntuacion) VALUES ('$category', '$ecoQuality')");
	}
	//FIXME $_SESSION['xml'] not available here :S :S :S
	addEvents($db);
}

function addEvents($db) {
	$events = $_SESSION['xml'] -> getElementsByTagName('evento');
	foreach($events as $event) {
		$name = $db -> real_escape_string(strip_tags($event -> getElementsByTagName('nombre') -> item(0) -> nodeValue));
		$dateStart = $db -> real_escape_string(strip_tags($event -> getElementsByTagName('dia-de-inicio') -> item(0) -> nodeValue));
		$dateEnd = $db -> real_escape_string(strip_tags($event -> getElementsByTagName('dia-de-fin') -> item(0) -> nodeValue));
		$description = $db -> real_escape_string(strip_tags($event -> getElementsByTagName('descripcion') -> item(0) -> nodeValue));
		$localization = $db -> real_escape_string(strip_tags($event -> getElementsByTagName('localizacion') -> item(0) -> nodeValue));
		$query = $db -> query("SELECT COUNT(*) AS number FROM eventos WHERE nombre = '$name' AND inicio = '$dateStart' AND fin = '$dateEnd' AND localizacion = '$localization'");
		if($query -> fetch_object() -> number == 0) {
			$db -> query("INSERT INTO eventos (nombre, descripcion, inicio, fin, localizacion) VALUES ('$name', '$description', '$dateStart', '$dateEnd', '$localization')");
			$id = $db -> query("SELECT id FROM eventos WHERE nombre = '$name'") -> fetch_object() -> id;
			$catEco = array();
			foreach ($event -> getElementsByTagName('categoria') as $category) {
				$catName = $db -> real_escape_string($category -> nodeValue);
				$catQuery = $db -> query("SELECT id, puntuacion FROM categorias WHERE nombre = '$catName'");
				$cat = $catQuery -> fetch_object();
				array_push($catEco, $cat -> puntuacion);
				$catId = $cat -> id;
				$db -> query("INSERT INTO eventos_categorias (categoria_id, evento_id) VALUES ('$catId', '$id')");
			}
			if(count($catEco) > 0) {
				$ecoQuality = array_sum($catEco) / count($catEco);
				$db -> query("UPDATE eventos SET puntuacion = '$ecoQuality' WHERE id = '$id'");
			}
		}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Lector datos</title>
	</head>
	<body>
		<form method="POST">
			<label>URL del fichero XML</label>
			<input type="url" name="data_url" value="http://datos.gijon.es/doc/informacion/eventos.xml"/>
			<input type="submit" name="load_url" value="Cargar"/>
		</form>
		<?php if(isset($catArr) && !empty($catArr)): ?>
		<h2>Categorías por añadir</h2>
			<form method="POST">
				<?php foreach ($catArr as $cat):?>
					<input type="text" name="category[]" value="<?php echo $cat ?>"/>
					<input type="number" name="ecoQuality[]" value=0 />
					<br/>
				<?php endforeach; ?>
				<input type="submit" name="add_categories" value="Añadir"/>
			</form>
		<?php endif; ?>
	</body>
</html>