<div class="centrosPoblados view">
<h2><?php  __('Centros Poblado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Longitud'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['longitud']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Latitud'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['latitud']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $centrosPoblado['CentrosPoblado']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Distrito'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($centrosPoblado['Distrito']['nombre'], array('controller' => 'distritos', 'action' => 'view', $centrosPoblado['Distrito']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Centros Poblado', true), array('action' => 'edit', $centrosPoblado['CentrosPoblado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Centros Poblado', true), array('action' => 'delete', $centrosPoblado['CentrosPoblado']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $centrosPoblado['CentrosPoblado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros Poblados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Poblado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Distritos', true), array('controller' => 'distritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distrito', true), array('controller' => 'distritos', 'action' => 'add')); ?> </li>
	</ul>
</div>
