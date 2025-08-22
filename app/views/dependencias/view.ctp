<div class="dependencias view">
<h2><?php  __('Dependencia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependencia['Dependencia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependencia['Dependencia']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependencia['Dependencia']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $dependencia['Dependencia']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Dependencia', true), array('action' => 'edit', $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Dependencia', true), array('action' => 'delete', $dependencia['Dependencia']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $dependencia['Dependencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependencias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependencia', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
