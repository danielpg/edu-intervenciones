<div class="niveles view">
<h2><?php  __('Nivel');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivel['Nivel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivel['Nivel']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivel['Nivel']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $nivel['Nivel']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Nivel', true), array('action' => 'edit', $nivel['Nivel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Nivel', true), array('action' => 'delete', $nivel['Nivel']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $nivel['Nivel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Niveles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nivel', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
