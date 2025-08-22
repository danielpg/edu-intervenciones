<div class="valores index">
	<h2><?php __('Valores');?></h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span><table cellpadding="0" cellspacing="0">
	<span class="lbutton"><?php echo $this->Html->link('Importar',array('action'=>'importar')); ?></span><table cellpadding="0" cellspacing="0">

	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>

			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th>Modulo</th>
			<th><?php echo $this->Paginator->sort('indicador_id');?></th>
			<th><?php echo $this->Paginator->sort('periodo_id');?></th>
			<th><?php echo $this->Paginator->sort('valor');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($valores as $valor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $valor['Valor']['id']; ?>&nbsp;</td>

		<td><?php echo $valor['Valor']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $valor['Valor']['fecha_modificacion']; ?>&nbsp;</td>
		<td>
			<?php echo $list[$valor['Indicador']['submodulo_id']]; ?>
		</td>
		<td>
			<?php echo $valor['Indicador']['nombre']; ?>
		</td>

			<?php // echo $this->Html->link($valor['CentrosEducativo']['nombre'], array('controller' => 'centros_educativos', 'action' => 'view', $valor['CentrosEducativo']['id'])); ?>
			<?php // echo $this->Html->link($valor['DetalleCentrosEducativo']['id'], array('controller' => 'detalle_centros_educativos', 'action' => 'view', $valor['DetalleCentrosEducativo']['id'])); ?>

		<td><?php echo $valor['Periodo']['nombre']; ?>&nbsp;</td>
		<td><?php echo $valor['Valor']['valor']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $valor['Valor']['id'])); ?>
			<?php //echo $this->Html->link(__('Editarar', true), array('action' => 'edit', $valor['Valor']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $valor['Valor']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $valor['Valor']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Valor', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('controller' => 'centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('controller' => 'centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicadores', true), array('controller' => 'indicadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicador', true), array('controller' => 'indicadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
	</ul>
</div>
