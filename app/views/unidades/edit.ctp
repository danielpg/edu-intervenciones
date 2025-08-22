<div class="unidades form">
<?php echo $this->Form->create('Unidad');?>
	<fieldset>
		<legend><?php __('Editar Unidad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('dres_id');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Unidad.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('Unidad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Unidades', true), array('action' => 'index'));?></li>
	</ul>
</div>

