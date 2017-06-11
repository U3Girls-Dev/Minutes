<html>
	<head>
		<?= $this->element('head') ?>
	</head>

	<body>
		<?= $this->element('header') ?>

		<div class="contents">
			<?= $this->fetch('content') ?>
		</div>

		<?= $this->element('footer') ?>
	</body>

	<footer>
	</footer>
</html>