<div class="tiposPeriodos view">
<h2><?php  __('Tipos Periodo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiposPeriodo['TiposPeriodo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiposPeriodo['TiposPeriodo']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiposPeriodo['TiposPeriodo']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiposPeriodo['TiposPeriodo']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tiposPeriodo['TiposPeriodo']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipos Periodo', true), array('action' => 'edit', $tiposPeriodo['TiposPeriodo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipos Periodo', true), array('action' => 'delete', $tiposPeriodo['TiposPeriodo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tiposPeriodo['TiposPeriodo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Periodos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Periodo', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
