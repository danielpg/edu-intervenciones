<div class="categorias index">
	<h2><?php __('Temáticas');?></h2>


	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<!--th><?php //echo $this->Paginator->sort('codigo');?></th-->
			<th>Categoría</th>

			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($categorias as $categoria):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $categoria['Categoria']['nombre']; ?>&nbsp;</td>
		<!--td><?php //echo $categoria['Categoria']['codigo']; ?>&nbsp;</td-->
		<td><?php echo $categoria['CategoriasPadre']['nombre']; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $categoria['Categoria']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $categoria['Categoria']['id']), null, sprintf(__('¿Usted quiere eliminar la Temática # %s?', true), $categoria['Categoria']['nombre'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina %page% de %pages%, mostrando %current% filas de un total de %count%', true)
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
		<li><?php echo $this->Html->link(__('New Categoria', true), array('action' => 'add')); ?></li>
	</ul>
</div>
