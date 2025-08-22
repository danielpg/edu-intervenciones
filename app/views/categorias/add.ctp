<div class="categorias form">
<?php echo $this->Form->create('Categoria');?>
	<fieldset>
		<legend><?php __('Agregar Temática'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array("label"=>"Nombre de Temática"));
		//echo $this->Form->input('codigo',array("label"=>"Código"));
		echo $this->Form->input('resumen',array("label"=>"Resumen"));
		echo $this->Form->input('categoria_padre_id',array("label"=>"Categoría de Temática","options" => $padres));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorías', true), array('action' => 'index'));?></li>
	</ul>
</div>
