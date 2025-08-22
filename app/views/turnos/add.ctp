<div class="turnos form">
<?php echo $this->Form->create('Turno');?>
	<fieldset>
		<legend><?php __('Agregar Turno'); ?></legend>
	<?php
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Turnos', true), array('action' => 'index'));?></li>
	</ul>
</div>