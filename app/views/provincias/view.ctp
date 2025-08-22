<div class="provincias view">
<h2><?php  __('Provincia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $provincia['Provincia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $provincia['Provincia']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $provincia['Provincia']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Departamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($provincia['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $provincia['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $provincia['Provincia']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $provincia['Provincia']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Provincia', true), array('action' => 'edit', $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Provincia', true), array('action' => 'delete', $provincia['Provincia']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
