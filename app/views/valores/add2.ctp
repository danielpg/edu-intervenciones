<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Agregar Institución Educativa'); ?></legend>
	<?php
		echo $this->Form->input('intervencion_id',array("label"=>"Intervención"));

		echo $this->Form->input('fecha_inicio',array("type"=>"date","label"=>"Fecha de Inicio de Intervención"));
		echo $this->Form->input('fecha_fin',array("type"=>"date","label"=>"Fecha de Fin de Intervención"));

		echo $this->Form->input('detalle_centro_educativo',array("label"=>"Codigo Modular"));
		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));

		echo $this->Form->input('tipo_periodo_id',array("type"=>"hidden","value"=>1));
		echo $this->Form->input('periodo',array("type"=>"hidden","value"=>0));
	?>
	</fieldset>
	<input type="button" id="btn_add" name="btn_add" value="Agregar" onclick="add_codigos()"/>
	<br/>
	<br/>
	
<?php echo $this->Form->end(__('Grabar', true));?>
</div>

<table id="table_complete">
	<tr>
		<td>Codigo Modular</td>
		<td>Centro Educativo</td>
		<td>Distrito</td>
		<td>Provincia</td>
		<td>Departamento</td>
		<td>Eliminar</td>
	</tr>
</table>

<script>

	function add_codigos(){
		if($( "#ValorDetalleCentroEducativoId" ).val()!=''){
			var codigo_modular= $( "#ValorDetalleCentroEducativo" ).val();
			var cols=codigo_modular.split(" - ");
			
			var n = $('tr:last td', $("#table_complete")).length;
			var tds = '<tr>';
			for(var i = 0; i < n; i++){
				
				if(i==(n-1)){
					val_td='Eliminar';
				}else{
					val_td=cols[i];
				}
				tds += '<td>'+val_td+'</td>';
			}
			tds += '</tr>';
			$("#table_complete").append(tds);
		}
	}
	
  $(function() {

    $( "#ValorDetalleCentroEducativo" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/detalle_centros_educativos/autocomplete') ?>",
      focus: function( event, ui ) {
        $( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        return false;
      },
      select: function( event, ui ) {
        $( "#ValorDetalleCentroEducativo" ).val( ui.item.nombre );
        $( "#ValorDetalleCentroEducativoId" ).val( ui.item.id );
       // $( "#check" ).val( ui.item.id );
        //$( "#project-description" ).html( ui.item.desc );
        //$( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
 
        return false;
      },
       change: function( event, ui ) {
              if ( !ui.item ){
       			 $( "#ValorDetalleCentroEducativo" ).val("" );
       			 $( "#ValorDetalleCentroEducativoId" ).val( "" );
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


