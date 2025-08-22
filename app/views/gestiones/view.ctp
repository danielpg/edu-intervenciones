<div class="gestiones view">
<h2><?php  __('Gestion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gestion['Gestion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gestion['Gestion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gestion['Gestion']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $gestion['Gestion']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Gestion', true), array('action' => 'edit', $gestion['Gestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Gestion', true), array('action' => 'delete', $gestion['Gestion']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $gestion['Gestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Gestiones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gestion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
