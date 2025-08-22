<div class="valores view">
<h2><?php  __('Valor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Valor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['valor']; ?>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Indicador'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['Indicador']['nombre'], array('controller' => 'indicadores', 'action' => 'view', $valor['Indicador']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $valor['Valor']['usuario_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Centros Educativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['CentrosEducativo']['nombre'], array('controller' => 'centros_educativos', 'action' => 'view', $valor['CentrosEducativo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Detalle Centros Educativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['DetalleCentrosEducativo']['id'], array('controller' => 'detalle_centros_educativos', 'action' => 'view', $valor['DetalleCentrosEducativo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($valor['Opcion']['id'], array('controller' => 'opciones', 'action' => 'view', $valor['Opcion']['id'])); ?>
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
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editarar Valor', true), array('action' => 'edit', $valor['Valor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Valor', true), array('action' => 'delete', $valor['Valor']['id']), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $valor['Valor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Valores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Valor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Centros Educativos', true), array('controller' => 'centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Centros Educativo', true), array('controller' => 'centros_educativos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicadores', true), array('controller' => 'indicadores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicador', true), array('controller' => 'indicadores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Detalle Centros Educativos', true), array('controller' => 'detalle_centros_educativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Detalle Centros Educativo', true), array('controller' => 'detalle_centros_educativos', 'action' => 'add')); ?> </li>
	</ul>
</div>
