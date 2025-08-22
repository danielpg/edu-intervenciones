<div class="valores form">
<?php echo $this->Form->create('Valor');?>
	<fieldset>
		<legend><?php __('Asignar Código Modular a la Intervención'); ?></legend>
	<?php
		echo $this->Form->input('intervencion_id',array('options' => $intervenciones,'empty' => __('Seleccionar',true),"label"=>"Intervención"));

		echo $this->Form->input('fecha_inicio',array("type"=>"date","label"=>"Fecha de Inicio de la Intervención"));
		echo $this->Form->input('fecha_fin',array("type"=>"date","label"=>"Fecha de Fin de la Intervención"));

		echo $this->Form->input('detalle_centro_educativo',array("label"=>"Código Modular"));
		echo $this->Form->input('detalle_centro_educativo_id',array("type"=>"hidden"));

		echo $this->Form->input('tipo_periodo_id',array("type"=>"hidden","value"=>1));
		echo $this->Form->input('periodo',array("type"=>"hidden","value"=>0));
	?>
	<table border="0">
		<tr>
			<td align="right" style="text-align: right;border: 0px;" class="actions"">
				<a href="JavaScript:void(0)" onclick="add_codigos()" id="btn_add" name="btn_add">Agregar Código Modular</a>
			</td>
		</tr>
	</table>
	<br/>
	
	<table id="table_complete" style="height: 50px;" overflow: auto;">
		<tr>
			<td>Código Modular</td>
			<td>Centro Educativo</td>
			<td>Distrito</td>
			<td>Provincia</td>
			<td>Departamento</td>
			<td>&nbsp;</td>
		</tr>
		<?php 
			if(!empty($string_detalle)){
				echo $string_detalle;
			}
		?>
	</table>
	<?php echo $this->Form->end(__('Grabar', true));?>
	</fieldset>
</div>
<script>
	function add_codigos(){
		if($( "#ValorDetalleCentroEducativoId" ).val()!=''){
			var id_modular= $( "#ValorDetalleCentroEducativoId" ).val();
			if ( !$('#ValorTable'+id_modular).length ) {
				var codigo_modular= $( "#ValorDetalleCentroEducativo" ).val();
				var cols=codigo_modular.split(" - ");
				//if ($.inArray(id, cols) > -1) {
					var n = $('tr:last td', $("#table_complete")).length;
					var tds = '<tr >';
					for(var i = 0; i < n; i++){
						if(i==(n-1)){
							val_td="<a href='JavaScript:void(0)' onclick='del_codigos()'><img src='<?php echo Router::url('/img/icon_delete.png')?>' /></a>";
						}else{
							if(i==0){
								val_td=cols[i]+"<input type='hidden' value='"+id_modular+" - "+codigo_modular+"' name='data[Valor][table_centro_educativo][]' id='ValorTable"+id_modular+"'/>";
							}else{
								val_td=cols[i];
							}
						}
						tds += '<td>'+val_td+'</td>';
					}
					tds += '</tr>';
					$("#table_complete").append(tds);
				//}
			}
			$( "#ValorDetalleCentroEducativo" ).val("" );
			$( "#ValorDetalleCentroEducativoId" ).val( "" );
		}
	}

	function del_codigos(){
		$('#table_complete tr:last').remove();
	}

  $(function() {

    $( "#ValorDetalleCentroEducativo" ).autocomplete({
      minLength: 0,
      source: "<?php echo Router::url('/detalle_centros_educativos/autocomplete') ?>",
      focus: function( event, ui ) {
          	text=ui.item.DetalleCentrosEducativo.codigo_modular + " - " + ui.item.CentrosEducativo.nombre + " - " + ui.item.Distrito.nombre + " - " + ui.item.Provincia.nombre + " - " + ui.item.Departamento.nombre;
        	$( "#ValorDetalleCentroEducativo" ).val( text );
        	return false;
      },
      select: function( event, ui ) {
    	  	text=ui.item.DetalleCentrosEducativo.codigo_modular + " - " + ui.item.CentrosEducativo.nombre + " - " + ui.item.Distrito.nombre + " - " + ui.item.Provincia.nombre + " - " + ui.item.Departamento.nombre;
        	$( "#ValorDetalleCentroEducativo" ).val( text );
        	$( "#ValorDetalleCentroEducativoId" ).val( ui.item.DetalleCentrosEducativo.id );
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
        .append( "<a>" + item.DetalleCentrosEducativo.codigo_modular + " - " + item.CentrosEducativo.nombre + " - " + item.Distrito.nombre + " - " + item.Provincia.nombre + " - " + item.Departamento.nombre + "</a>" )
        .appendTo( ul );
    };


  });
</script>


