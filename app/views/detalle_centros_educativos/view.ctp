<div class="detalleCentrosEducativos view">
<h2><?php  __('Detalle Centros Educativo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo Modular'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['codigo_modular']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleCentrosEducativo['DetalleCentrosEducativo']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Centros Educativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detalleCentrosEducativo['CentrosEducativo']['nombre'], array('controller' => 'centros_educativos', 'action' => 'view', $detalleCentrosEducativo['CentrosEducativo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unidad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detalleCentrosEducativo['Unidad']['nombre'], array('controller' => 'unidades', 'action' => 'view', $detalleCentrosEducativo['Unidad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Detalle Centros Educativo', true), array('action' => 'edit', $detalleCentrosEducativo['DetalleCentrosEducativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Detalle Centros Educativo', true), array('action' => 'delete', $detalleCentrosEducativo['DetalleCentrosEducativo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $detalleCentrosEducativo['DetalleCentrosEducativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('controller' => 'centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('controller' => 'centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades', true), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad', true), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
