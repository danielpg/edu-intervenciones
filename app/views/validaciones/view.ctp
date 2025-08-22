<div class="validaciones view">
<h2><?php  __('Validacion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $validacion['Validacion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $validacion['Validacion']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $validacion['Validacion']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $validacion['Validacion']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Validacion', true), array('action' => 'edit', $validacion['Validacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Validacion', true), array('action' => 'delete', $validacion['Validacion']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $validacion['Validacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Validaciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Validacion', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
