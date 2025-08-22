<div class="lenguas view">
<h2><?php  __('Lengua');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lengua['Lengua']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lengua['Lengua']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lengua['Lengua']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lengua['Lengua']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Lengua', true), array('action' => 'edit', $lengua['Lengua']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Lengua', true), array('action' => 'delete', $lengua['Lengua']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $lengua['Lengua']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lenguas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lengua', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
