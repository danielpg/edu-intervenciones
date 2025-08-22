<div class="centrosPoblados index">
	<h2><?php __('Centros Poblados');?></h2>


	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('longitud');?></th>
			<th><?php echo $this->Paginator->sort('latitud');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th><?php echo $this->Paginator->sort('distrito_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($centrosPoblados as $centrosPoblado):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $centrosPoblado['CentrosPoblado']['id']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['codigo']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['nombre']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['longitud']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['latitud']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $centrosPoblado['CentrosPoblado']['fecha_modificacion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($centrosPoblado['Distrito']['nombre'], array('controller' => 'distritos', 'action' => 'view', $centrosPoblado['Distrito']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $a = null;#this->Html->link(__('View', true), array('action' => 'view', $centrosPoblado['CentrosPoblado']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $centrosPoblado['CentrosPoblado']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $centrosPoblado['CentrosPoblado']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $centrosPoblado['CentrosPoblado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Centros Poblado', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Distritos', true), array('controller' => 'distritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distrito', true), array('controller' => 'distritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
