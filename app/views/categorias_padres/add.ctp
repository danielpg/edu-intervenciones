<div class="categorias form">
<?php echo $this->Form->create('CategoriasPadre');?>
	<fieldset>
		<legend><?php __('Agregar Categoría de Temática'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array("label"=>"Nombre de Categoría de Temática"));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorias', true), array('action' => 'index'));?></li>
	</ul>
</div>
