<div class="centrosPoblados form">
<?php echo $this->Form->create('CentrosPoblado');?>
	<fieldset>
		<legend><?php __('Editar Centros Poblado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('nombre');
		echo $this->Form->input('distrito');
		echo $this->Form->input('distrito_id',array("type"=>"hidden"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('CentrosPoblado.id')), null, sprintf(__('Esta seguro de querer eliminar # %s?', true), $this->Form->value('CentrosPoblado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Centros Poblados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Distritos', true), array('controller' => 'distritos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distrito', true), array('controller' => 'distritos', 'action' => 'add')); ?> </li>
	</ul>
</div>




 <script>
  $(function() {

    $( "#CentrosPobladoDistrito" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/distritos/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#CentrosPobladoDistrito" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#CentrosPobladoDistrito" ).val( ui.item.nombre );
        $( "#CentrosPobladoDistritoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#CentrosPobladoDistrito" ).val("" );
       			 $( "#CentrosPobladoDistritoId" ).val( "" );
				// $( "#check" ).val( "");
                //return removeIfInvalid( this );
			}
       }
    })
    .data( "autocomplete" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .data( "item.autocomplete", item )
        .append( "<a>" + item.nombre + "</a>" )
        .appendTo( ul );
    };


  });
</script>
