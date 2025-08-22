<div class="valores view">
<h2><?php  __('Valor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Creacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['fecha_creacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Modificacion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['fecha_modificacion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Intervencion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['Intervencion']['nombre'], array('controller' => 'intervenciones', 'action' => 'view', $valor['Intervencion']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Detalle Centro Educativo Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['detalle_centro_educativo_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipos Periodo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['TiposPeriodo']['id'], array('controller' => 'tipos_periodos', 'action' => 'view', $valor['TiposPeriodo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Periodo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['periodo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Valor', true), array('action' => 'edit', $valor['Valor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Valor', true), array('action' => 'delete', $valor['Valor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $valor['Valor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Valores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Intervenciones', true), array('controller' => 'intervenciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervencion', true), array('controller' => 'intervenciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Periodos', true), array('controller' => 'tipos_periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Periodo', true), array('controller' => 'tipos_periodos', 'action' => 'add')); ?> </li>
	</ul>
</div>
