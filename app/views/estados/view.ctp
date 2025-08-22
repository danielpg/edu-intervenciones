<div class="estados view">
<h2><?php  __('Estado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estado['Estado']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Estado', true), array('action' => 'edit', $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Estado', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $estado['Estado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
