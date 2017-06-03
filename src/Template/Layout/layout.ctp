<header style="height: 76px; background-color:#ccc;">
	<h3><?= h($data['title']); ?></h3>
	<?= $this->element('header_menu'); ?>
</header>
<body style="margin: 0;">
<div id="contents" style="height: 500px; overflow-y: scroll;">
	<?php echo $this->fetch('content'); ?>
</div>
</body>
<footer style="height: 43px; background-color:#ccc;">
	<h3 style="margin-bottom: 0;"><?= h($data['footer']); ?></h3>
</footer>