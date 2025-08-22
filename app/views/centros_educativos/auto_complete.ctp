<?php  echo $this->element('sql_dump'); ?>
<ul>
	<?php foreach($centros as $centro): ?>
	<li style="cursor: pointer;margin-bottom: 4px;"><?php echo $centro['CentrosEducativo']['nombre'] ?></li>
	<?php endforeach; ?>
</ul>