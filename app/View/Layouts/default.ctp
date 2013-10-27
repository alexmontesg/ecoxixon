<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo (isset($cakeDescription))?$cakeDescription:""; ?>
		<?php echo (isset($title_for_layout))?$title_for_layout:""; ?>
	</title>
	<meta name="viewport" content="width=device-width"/>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('estilo', 'categorias'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">var raiz='<?php echo $this->webroot; ?>';</script>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Finger+Paint' rel='stylesheet' type='text/css'>
</head>
<body>
	<canvas id="fondo" width="400px" height="400px"></canvas>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
