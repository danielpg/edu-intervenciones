<div class="tiposPeriodos form">
<?php echo $this->Form->create('TiposPeriodo');?>
	<fieldset>
		<legend><?php __('Edit Tipos Periodo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha_creacion');
		echo $this->Form->input('fecha_modificacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TiposPeriodo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TiposPeriodo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Periodos', true), array('action' => 'index'));?></li>
	</ul>
</div>