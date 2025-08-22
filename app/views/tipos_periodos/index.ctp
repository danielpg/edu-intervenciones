<div class="tiposPeriodos index">
	<h2><?php __('Tipos Periodos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tiposPeriodos as $tiposPeriodo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tiposPeriodo['TiposPeriodo']['id']; ?>&nbsp;</td>
		<td><?php echo $tiposPeriodo['TiposPeriodo']['nombre']; ?>&nbsp;</td>
		<td><?php echo $tiposPeriodo['TiposPeriodo']['descripcion']; ?>&nbsp;</td>
		<td><?php echo $tiposPeriodo['TiposPeriodo']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $tiposPeriodo['TiposPeriodo']['fecha_modificacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tiposPeriodo['TiposPeriodo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tiposPeriodo['TiposPeriodo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tiposPeriodo['TiposPeriodo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tiposPeriodo['TiposPeriodo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tipos Periodo', true), array('action' => 'add')); ?></li>
	</ul>
</div>