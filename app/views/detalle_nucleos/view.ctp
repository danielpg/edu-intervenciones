<div class="detalleNucleos view">
<h2><?php  __('Detalle Nucleo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleNucleo['DetalleNucleo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleNucleo['DetalleNucleo']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $detalleNucleo['DetalleNucleo']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Detalle Centros Educativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detalleNucleo['DetalleCentrosEducativo']['id'], array('controller' => 'detalle_centros_educativos', 'action' => 'view', $detalleNucleo['DetalleCentrosEducativo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nucleo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detalleNucleo['Nucleo']['nombre'], array('controller' => 'nucleos', 'action' => 'view', $detalleNucleo['Nucleo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nucleos Rol'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($detalleNucleo['NucleosRol']['nombre'], array('controller' => 'nucleos_roles', 'action' => 'view', $detalleNucleo['NucleosRol']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Detalle Nucleo', true), array('action' => 'edit', $detalleNucleo['DetalleNucleo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Detalle Nucleo', true), array('action' => 'delete', $detalleNucleo['DetalleNucleo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $detalleNucleo['DetalleNucleo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Nucleos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Nucleo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nucleos Roles', true), array('controller' => 'nucleos_roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nucleos Rol', true), array('controller' => 'nucleos_roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nucleos', true), array('controller' => 'nucleos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nucleo', true), array('controller' => 'nucleos', 'action' => 'add')); ?> </li>
	</ul>
</div>
