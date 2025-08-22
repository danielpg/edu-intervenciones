<div class="departamentos view">
<h2><?php  __('Departamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $departamento['Departamento']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Departamento', true), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Departamento', true), array('action' => 'delete', $departamento['Departamento']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
