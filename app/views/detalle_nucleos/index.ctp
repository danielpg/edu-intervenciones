<div class="detalleNucleos index">
	<h2><?php __('Detalle Nucleos');?></h2>
<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort("Codigo Modular",'detalle_centro_educativo_id');?></th>
			<th><?php echo $this->Paginator->sort('nucleo_id');?></th>
			<th><?php echo $this->Paginator->sort('nucleo_rol_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($detalleNucleos as $detalleNucleo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $detalleNucleo['DetalleNucleo']['id']; ?>&nbsp;</td>
		<td><?php echo $detalleNucleo['DetalleNucleo']['fecha_modificacion']; ?>&nbsp;</td>
		<td><?php echo $detalleNucleo['DetalleNucleo']['fecha_creacion']; ?>&nbsp;</td>
		<td>
			<?php echo $detalleNucleo['DetalleCentrosEducativo']['codigo_modular'];//, array('controller' => 'detalle_centros_educativos', 'action' => 'view', $detalleNucleo['DetalleCentrosEducativo']['id'])); ?>
		</td>
		<td>
			<?php echo  $detalleNucleo['Nucleo']['nombre'];//, array('controller' => 'nucleos', 'action' => 'view', $detalleNucleo['Nucleo']['id'])); ?>
		</td>
		<td>
			<?php echo $detalleNucleo['NucleosRol']['nombre'];//, array('controller' => 'nucleos_roles', 'action' => 'view', $detalleNucleo['NucleosRol']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $a = null;#this->Html->link(__('View', true), array('action' => 'view', $detalleNucleo['DetalleNucleo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $detalleNucleo['DetalleNucleo']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $detalleNucleo['DetalleNucleo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $detalleNucleo['DetalleNucleo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Nucleo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nucleos Roles', true), array('controller' => 'nucleos_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nucleos Rol', true), array('controller' => 'nucleos_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nucleos', true), array('controller' => 'nucleos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nucleo', true), array('controller' => 'nucleos', 'action' => 'add')); ?> </li>
	</ul>
</div>
