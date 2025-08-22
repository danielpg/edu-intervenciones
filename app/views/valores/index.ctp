<div class="valores index">
	<h2><?php __('Intervenciones - Códigos Modulares');?></h2>
	
	<?php
echo $alaxosForm->create('Valor', array('controller' => 'index', 'url' => $this->passedArgs));
?>
	
	<span class="lbutton"><?php echo $this->Html->link('Asignar Código Modular',array('action'=>'add')); ?></span>

	
	<table cellpadding="0" cellspacing="0">
	<tr>
		<?php  ?>
			<th sort="id" ><?php echo $this->Paginator->sort('#','Valor.id'); ?></th>
			<th sort="intervencion"><?php echo $this->Paginator->sort(__('Intrevención',true),'Intervencion.nombre');?></th>
			<th sort="codigo_modular"><?php echo $this->Paginator->sort(__('Código Modular',true),'DetalleCentrosEducativo.codigo_modular');?></th>
			<th sort="centro_educativo"><?php echo $this->Paginator->sort(__('Centro Educativo',true),'CentrosEducativo.nombre');?></th>
			<th sort="distrito"><?php echo $this->Paginator->sort(__('Distrito',true),'Distrito.nombre');?></th>
			<th sort="provincia"><?php echo $this->Paginator->sort(__('Provincia',true),'Provincia.nombre');?></th>
			<th sort="departamento"><?php echo $this->Paginator->sort(__('Departamento',true),'Departamento.nombre');?></th>
			
			<th class="actions"><?php __('Actions');?></th>
		<?php ?>
		<?php /* ?>
		<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort("Intervención",'intervencion_id');?></th>
			<th><?php echo $this->Paginator->sort("Código Modular",'detalle_centro_educativo_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
			<?php */?>
	</tr>
	
	<tr>
			<th><?php ?></th>
			<th><?php echo $this->AlaxosForm->filter_field('Intervencion.nombre');?></th>
			<th><?php echo $this->AlaxosForm->filter_field('DetalleCentrosEducativo.codigo_modular');?></th>
			<th><?php echo $this->AlaxosForm->filter_field('CentrosEducativo.nombre');?></th>
			<th><?php echo $this->AlaxosForm->filter_field('Distrito.nombre');?></th>
			<th><?php echo $this->AlaxosForm->filter_field('Provincia.nombre');?></th>
			<th><?php echo $this->AlaxosForm->filter_field('Departamento.nombre');?></th>
			<th class="actions">  <span class="submit"><input type="submit" value="Filtrar" /></span> </th>
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

		<td>
			<?php echo $valor['Intervencion']['nombre']; ?>
		</td>
		<td><?php echo $valor['DetalleCentrosEducativo']['codigo_modular']; ?>&nbsp;</td>
		<td><?php echo $valor['CentrosEducativo']['nombre']; ?>&nbsp;</td>
		<td><?php echo $valor['Distrito']['nombre']; ?>&nbsp;</td>
		<td><?php echo $valor['Provincia']['nombre']; ?>&nbsp;</td>
		<td><?php echo $valor['Departamento']['nombre']; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $valor['Valor']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $valor['Valor']['id']), null, sprintf(__('¿Usted quiere eliminar el ID # %s?', true), $valor['Valor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% filas de un total de %count%', true)
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Valor', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Intervenciones', true), array('controller' => 'intervenciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervencion', true), array('controller' => 'intervenciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Periodos', true), array('controller' => 'tipos_periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Periodo', true), array('controller' => 'tipos_periodos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php //echo $this->element('sql_dump'); ?>