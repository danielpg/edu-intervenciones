<div class="formas view">
<h2><?php  __('Forma');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forma['Forma']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forma['Forma']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forma['Forma']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $forma['Forma']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Forma', true), array('action' => 'edit', $forma['Forma']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Forma', true), array('action' => 'delete', $forma['Forma']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $forma['Forma']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
