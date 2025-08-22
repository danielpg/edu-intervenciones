<div class="turnos view">
<h2><?php  __('Turno');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $turno['Turno']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $turno['Turno']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $turno['Turno']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $turno['Turno']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $turno['Turno']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Turno', true), array('action' => 'edit', $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Turno', true), array('action' => 'delete', $turno['Turno']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
