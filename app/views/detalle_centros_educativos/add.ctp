<div class="detalleCentrosEducativos form">
<?php echo $this->Form->create('DetalleCentrosEducativo');?>
	<fieldset>
		<legend><?php __('Agregar Codigo Modular'); ?></legend>
	<?php
		echo $this->Form->input('codigo_modular');
		echo $this->Form->input('gggg',array('type'=>'hidden'));
		echo $this->Form->input('hhhhh',array('type'=>'hidden'));
		echo $this->Form->input('centro_educativo');
		echo $this->Form->input('centro_educativo_id',array("type"=>"hidden"));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Grabar', true));?>
</div>
 <script>
  $(function() {

    $( "#DetalleCentrosEducativoCentroEducativo" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/centros_educativos/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#DetalleCentrosEducativoCentroEducativo" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#DetalleCentrosEducativoCentroEducativo" ).val( ui.item.nombre );
        $( "#DetalleCentrosEducativoCentroEducativoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#DetalleCentrosEducativoCentroEducativo" ).val("" );
       			 $( "#DetalleCentrosEducativoCentroEducativoId" ).val( "" );
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
