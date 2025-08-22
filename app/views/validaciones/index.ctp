<div class="validaciones index">
	<h2><?php __('Validaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($validaciones as $validacion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $validacion['Validacion']['id']; ?>&nbsp;</td>
		<td><?php echo $validacion['Validacion']['nombre']; ?>&nbsp;</td>
		<td><?php echo $validacion['Validacion']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $validacion['Validacion']['fecha_modificacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $a = null;#this->Html->link(__('View', true), array('action' => 'view', $validacion['Validacion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $validacion['Validacion']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $validacion['Validacion']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $validacion['Validacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Validacion', true), array('action' => 'add')); ?></li>
	</ul>
</div>