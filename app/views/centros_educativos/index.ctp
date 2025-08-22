<div class="centrosEducativos index">
	<h2><?php __('Centros Educativos');?></h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>

	<span class="lbutton"><?php echo $this->Html->link('Importar',array('action'=>'importar')); ?></span>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo_busqueda');?></th>
			<th><?php echo $this->Paginator->sort('codigo_local');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('anexo');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('centro_poblado_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($centrosEducativos as $centrosEducativo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $centrosEducativo['CentrosEducativo']['id']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['codigo_busqueda']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['codigo_local']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['nombre']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['anexo']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $centrosEducativo['CentrosEducativo']['direccion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($centrosEducativo['CentrosPoblado']['nombre'], array('controller' => 'centros_poblados', 'action' => 'view', $centrosEducativo['CentrosPoblado']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $a = null;#this->Html->link(__('View', true), array('action' => 'view', $centrosEducativo['CentrosEducativo']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $centrosEducativo['CentrosEducativo']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $centrosEducativo['CentrosEducativo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $centrosEducativo['CentrosEducativo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Centros Poblados', true), array('controller' => 'centros_poblados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Poblado', true), array('controller' => 'centros_poblados', 'action' => 'add')); ?> </li>
	</ul>
</div>
