<div class="centrosEducativos view">
<h2><?php  __('Centros Educativo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo Busqueda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['codigo_busqueda']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo Local'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['codigo_local']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Anexo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['anexo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Direccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosEducativo['CentrosEducativo']['direccion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Centros Poblado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($centrosEducativo['CentrosPoblado']['nombre'], array('controller' => 'centros_poblados', 'action' => 'view', $centrosEducativo['CentrosPoblado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Centros Educativo', true), array('action' => 'edit', $centrosEducativo['CentrosEducativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Centros Educativo', true), array('action' => 'delete', $centrosEducativo['CentrosEducativo']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $centrosEducativo['CentrosEducativo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros Poblados', true), array('controller' => 'centros_poblados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Poblado', true), array('controller' => 'centros_poblados', 'action' => 'add')); ?> </li>
	</ul>
</div>
