<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo (isset($cakeDescription))?$cakeDescription:""; ?>
		<?php echo (isset($title_for_layout))?$title_for_layout:""; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('css.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>Página inicial</h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			el footer
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
