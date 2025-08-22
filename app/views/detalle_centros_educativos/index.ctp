<div class="detalleCentrosEducativos index">
	<h2><?php __('Codigos Modulares');?></h2>	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo_modular');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th><?php echo $this->Paginator->sort('centro_educativo_id');?></th>

			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($detalleCentrosEducativos as $detalleCentrosEducativo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['id']; ?>&nbsp;</td>
		<td><?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['codigo_modular']; ?>&nbsp;</td>
		<td><?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['fecha_modificacion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($detalleCentrosEducativo['CentrosEducativo']['nombre'], array('controller' => 'centros_educativos', 'action' => 'view', $detalleCentrosEducativo['CentrosEducativo']['id'])); ?>
		</td>

		<td class="actions">
			<?php echo $a = null;#this->Html->link(__('View', true), array('action' => 'view', $detalleCentrosEducativo['DetalleCentrosEducativo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $detalleCentrosEducativo['DetalleCentrosEducativo']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $detalleCentrosEducativo['DetalleCentrosEducativo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $detalleCentrosEducativo['DetalleCentrosEducativo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('controller' => 'centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('controller' => 'centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades', true), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad', true), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
