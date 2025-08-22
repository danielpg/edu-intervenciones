<div class="categorias form">
<?php echo $this->Form->create('Categoria');?>
	<fieldset>
		<legend><?php __('Editar Temática'); ?></legend>
	<?php

		
		echo $this->Form->input('id');
		echo $this->Form->input('nombre',array("label"=>"Nombre de Temática"));
		//echo $this->Form->input('codigo',array("label"=>"Código"));
		echo $this->Form->input('resumen',array("label"=>"Resumen"));
		echo $this->Form->input('categoria_padre_id',array("label"=>"Categoría de Temática","options" => $padres));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>

<?php //echo $this->element('sql_dump'); ?>
