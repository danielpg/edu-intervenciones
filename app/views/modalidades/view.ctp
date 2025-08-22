<div class="modalidades view">
<h2><?php  __('Modalidad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $modalidad['Modalidad']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Modalidad', true), array('action' => 'edit', $modalidad['Modalidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Modalidad', true), array('action' => 'delete', $modalidad['Modalidad']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $modalidad['Modalidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Modalidades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Modalidad', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
