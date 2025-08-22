<div class="distritos index">
	<h2><?php __('Distritos');?></h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span><table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('codigo');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('provincia_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($distritos as $distrito):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>

		<td><?php echo $distrito['Distrito']['codigo']; ?>&nbsp;</td>
		<td><?php echo $distrito['Distrito']['nombre']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($distrito['Provincia']['nombre'], array('controller' => 'provincias', 'action' => 'view', $distrito['Provincia']['id'])); ?>
		</td>
		<td><?php echo $distrito['Distrito']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $distrito['Distrito']['fecha_modificacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $a = null;#a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $distrito['Distrito']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $distrito['Distrito']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $distrito['Distrito']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $distrito['Distrito']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Distrito', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Provincias', true), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia', true), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
	</ul>
</div>
