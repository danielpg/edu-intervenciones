<div class="unidades view">
<h2><?php  __('Unidad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidad['Unidad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidad['Unidad']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dre Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidad['Unidad']['dre_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidad['Unidad']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $unidad['Unidad']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Unidad', true), array('action' => 'edit', $unidad['Unidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Unidad', true), array('action' => 'delete', $unidad['Unidad']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $unidad['Unidad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
