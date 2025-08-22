<div class="codigosLocales view">
<h2><?php  __('Codigos Local');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $codigosLocal['CodigosLocal']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Codigo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $codigosLocal['CodigosLocal']['codigo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $codigosLocal['CodigosLocal']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $codigosLocal['CodigosLocal']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $codigosLocal['CodigosLocal']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Codigos Local', true), array('action' => 'edit', $codigosLocal['CodigosLocal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Codigos Local', true), array('action' => 'delete', $codigosLocal['CodigosLocal']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $codigosLocal['CodigosLocal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Codigos Locales', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codigos Local', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
