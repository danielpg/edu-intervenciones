<div class="organos index">
	<h2>Fuentes de Financiamiento</h2>
	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>

	<table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('nombre');?></th>

			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($organos as $organo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>


		<td><?php echo $organo['Organo']['nombre']; ?>&nbsp;</td>

		<td class="actions">

			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $organo['Organo']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $organo['Organo']['id']), null, sprintf(__('¿Usted quiere eliminar la Fuente de Financiamiento # %s?', true), $organo['Organo']['nombre'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% filas de un total de %count%', true)
	));
	?></p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Atras', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Organo', true), array('action' => 'add')); ?></li>
	</ul>
</div>
