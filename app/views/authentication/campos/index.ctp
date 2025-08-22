<div class="campos index">
	<h2><?php __('Campos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tabla');?></th>
			<th><?php echo $this->Paginator->sort('original');?></th>
			<th><?php echo $this->Paginator->sort('campo_alias');?></th>
			<th><?php echo $this->Paginator->sort('estado');?></th>

			<th><?php echo $this->Paginator->sort('Modificado','modified');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($campos as $campo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $campo['Campo']['id']; ?>&nbsp;</td>
		<td><?php echo $campo['Campo']['tabla']; ?>&nbsp;</td>
		<td><?php echo $campo['Campo']['original']; ?>&nbsp;</td>
		<td><?php echo $campo['Campo']['campo_alias']; ?>&nbsp;</td>
		<td><?php echo ($campo['Campo']['estado']==1?"Activo":"Inactivo"); ?>&nbsp;</td>
	
		<td><?php echo $campo['Campo']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $a = null;#a = null;#a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $campo['Campo']['id'])); ?>
			<?php echo $this->Html->link(__('Editararar', true), array('action' => 'edit', $campo['Campo']['id'])); ?>
			<?php //echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $campo['Campo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $campo['Campo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrando %current% filas de un total de %count%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Atras', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Campo', true), array('action' => 'add')); ?></li>
	</ul>
</div>
