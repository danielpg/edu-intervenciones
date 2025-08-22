<div class="centrosEducativos form">
<?php echo $this->Form->create('CentrosEducativo');?>
	<fieldset>
		<legend><?php __('Editar Centros Educativo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('codigo_busqueda');
		echo $this->Form->input('codigo_local');
		echo $this->Form->input('nombre');
		echo $this->Form->input('anexo');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('direccion');
		echo $this->Form->input('centro_poblado');
		echo $this->Form->input('centro_poblado_id',array("type"=> "hidden" ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>

 <script>
  $(function() {

    $( "#CentrosEducativoCentroPoblado" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/centros_poblados/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#CentrosEducativoCentroPoblado" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#CentrosEducativoCentroPoblado" ).val( ui.item.nombre );
        $( "#CentrosEducativoCentroPobladoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#CentrosEducativoCentroPoblado" ).val("" );
       			 $( "#CentrosEducativoCentroPobladoId" ).val( "" );
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
