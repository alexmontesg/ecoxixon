<?php 
if(isset($_POST['load_url'])) {
	$dom = new DOMDocument;
	$dom->loadXML(file_get_contents($_POST['data_url']));
	$categories = $dom->getElementsByTagName('categoria');
	$catArr = array();
	foreach ($categories as $category) {
		if(!in_array($category->nodeValue, $catArr)) { // TODO Check not in DB already
			array_push($catArr, $category->nodeValue);
		}
	}
} else if(isset($_POST['add_categories'])) {
	$i = 0;
	foreach ($_POST['category'] as $category) {
		// TODO Add category with ecoQuality
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
	<?php if(isset($catArr)): ?>
		<h2>Categorías por añadir</h2>
		<form method="POST">
			<?php foreach ($catArr as $cat): ?>
				<input type="text" name="category[]" value="<?php echo $cat ?>"/>
				<input type="number" name="ecoQuality[]" value=0 />
				<br/>
			<?php endforeach; ?>
		<input type="submit" name="add_categories" value="Añadir"/>
		</form>
	<?php endif; ?>
</body>
</html>