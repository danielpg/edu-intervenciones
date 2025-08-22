<?php  //echo $this->element('sql_dump'); ?>
<ul>
	<?php foreach($detalles as $detalle): ?>
	<li style="cursor: pointer;margin-bottom: 4px;"><?php echo $detalle['DetalleCentrosEducativo']['codigo_modular'] ?></li>
	<?php endforeach; ?>
</ul>