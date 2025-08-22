<div class="provincias index">
	<h2><?php __('Provincias');?></h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span><table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('departamento_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($provincias as $provincia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

		<td><?php echo $provincia['Provincia']['codigo']; ?>&nbsp;</td>
		<td><?php echo $provincia['Provincia']['nombre']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($provincia['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $provincia['Departamento']['id'])); ?>
		</td>
		<td><?php echo $provincia['Provincia']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $provincia['Provincia']['fecha_modificacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $a = null;#a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $provincia['Provincia']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $provincia['Provincia']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $provincia['Provincia']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $provincia['Provincia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Provincia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
