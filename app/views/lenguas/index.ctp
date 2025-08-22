<div class="lenguas index">
	<h2><?php __('Lenguas');?></h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span><table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('fecha_creacion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_modificacion');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lenguas as $lengua):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lengua['Lengua']['id']; ?>&nbsp;</td>
		<td><?php echo $lengua['Lengua']['nombre']; ?>&nbsp;</td>
		<td><?php echo $lengua['Lengua']['fecha_creacion']; ?>&nbsp;</td>
		<td><?php echo $lengua['Lengua']['fecha_modificacion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $a = null;#a = null;#a = null;#this->Html->link(__('View', true), array('action' => 'view', $lengua['Lengua']['id'])); ?>
			<?php echo $this->Html->link(__('Editarar', true), array('action' => 'edit', $lengua['Lengua']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $lengua['Lengua']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $lengua['Lengua']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lengua', true), array('action' => 'add')); ?></li>
	</ul>
</div>