<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Editarar Valor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('valor');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
		echo $this->Form->input('indicador_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('centro_educativo_id');
		echo $this->Form->input('detalle_centro_educativo_id');
		echo $this->Form->input('opciones_id');
		echo $this->Form->input('periodo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Valor.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Valor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Valores', true), array('action' => 'index'));?></li>
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