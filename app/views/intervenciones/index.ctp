<style>
.main_container table tr td {
    font-size: 12px;
}
</style>


<div class="intervenciones index">
	<h2><?php __('Intervenciones');?></h2>

	<span class="lbutton"><?php echo $this->Html->link('Agregar Nuevo',array('action'=>'add')); ?></span>
	<table cellpadding="0" cellspacing="0">
	<tr>

			<th><?php echo $this->Paginator->sort('nombre');?></th>

			<!--th><?php //echo $this->Paginator->sort("Tematica",'categoria_id');?></th>
			<th><?php //echo $this->Paginator->sort("F.Financiación",'organo_id');?></th-->
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($intervenciones as $intervencion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	
		<td><?php echo $intervencion['Intervencion']['nombre']; ?>&nbsp;</td>

		<!--td>
			<?php //echo $intervencion['Categoria']['nombre']; ?>
		</td>
		<td>
			<?php //echo $intervencion['Organo']['nombre']; ?>
		</td-->
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $intervencion['Intervencion']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $intervencion['Intervencion']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $intervencion['Intervencion']['id']), null, sprintf(__('Esta seguro de querer eliminar %s?', true), $intervencion['Intervencion']['nombre'])); ?>
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
		<li><?php echo $this->Html->link(__('New Intervencion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Organos', true), array('controller' => 'organos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organo', true), array('controller' => 'organos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias', true), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria', true), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
