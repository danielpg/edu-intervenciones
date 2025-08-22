<div class="formatos view">
<h2><?php  __('Formato');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formato['Formato']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formato['Formato']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formato['Formato']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formato['Formato']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $formato['Formato']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Formato', true), array('action' => 'edit', $formato['Formato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Formato', true), array('action' => 'delete', $formato['Formato']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $formato['Formato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formatos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formato', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
