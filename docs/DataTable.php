
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
</head>
<body>

  
  <table id="tabla" class="table table-bordered  table-responsive table-striped table-hover">
    <thead>
      <tr>
							<th>#</th>
							 
							<th>Nombre____</th>
							<th>checkIn___</th>
							<th>checkOut___</th>
							<th class="hidden-xs">Correo</th>
							<th>Fecha de registro</th>
							<th>Tipo</th>
							<th>Phone</th>
							<th>Personas</th>
							<th> & </th>
							<th>Note</th></tr>
    </thead>
    <tbody>
      
	  <tr class=warning>
				<td>1</td>
				 
				<td>Juan Ernesto</td>
				<td>2018-03-29  </td>
				<td>2018-04-01  </td>
				<td><a href="mailto:jecluna@hotmail.com" class="btn btn-default " <i class="fa fa-phone fa-2x">

            </i>
                  jecluna@hotmail.com
                </a> </td>
				<td>2017-10-12 14:07:28</td>
                <td>Twin</td>
				<td> <a href="tel:57773978" class="btn btn-default " <i class="fa fa-phone fa-2x">

            </i>
                  57773978
                </a> </td>
				<td>3/0</td>
				 
				<td><a class='btn btn-default  btn-lg' href='mailto:jecluna@hotmail.com?Subject=Validando reservacion&body=Buenas tardes .%20 Juan Ernesto Para Hotel Boutique Del Mar sera un placer tenerle como huesped.
 Para garantizar la reserva es necesario realizar un deposito o transferencia a la siguiente cuenta:
%0e %0e
DATOS DE BANCO:%0e 
Banco: Banamex%0e 
Cuenta: 1766091%0e
Sucursal: 7004%0e
Transferencia: 002261700417660918%0e

Nombre: Consorcio Comercial Rodae S. de R. L. de C. V.  %0e%0e
DATOS PARA RESERVACION: %0e 
checkIn:  2018-03-29 %0e
checkOut: 2018-04-01 %0e%0e
Quedamos a la espera de su garantia para generar su reserva.
' target='_top'>Responder</a></td> 
				<td>Buenos dÃ­as me podrÃ­a informar si aÃºn tienen disponibilidad para semana santa. Queremos hospedarn</td> 
				
						
			   
    		</tr><tr class=>
				<td>2</td>
				 
				<td>Angélica Espinoza Jardón </td>
				<td>2018-03-09  </td>
				<td>2018-03-11  </td>
				<td><a href="mailto:angelica.ejardon@gmail.com" class="btn btn-default " <i class="fa fa-phone fa-2x">

            </i>
                  angelica.ejardon@gmail.com
                </a> </td>
				<td>2017-02-23 15:34:21</td>
                <td>Standar</td>
				<td> <a href="tel:0445515326221" class="btn btn-default " <i class="fa fa-phone fa-2x">

            </i>
                  0445515326221
                </a> </td>
				<td>1/1</td>
				 
				<td><a class='btn btn-default  btn-lg' href='mailto:angelica.ejardon@gmail.com?Subject=Validando reservacion&body=Buenas tardes .%20 Angélica Espinoza Jardón  Para Hotel Boutique Del Mar sera un placer tenerle como huesped.
 Para garantizar la reserva es necesario realizar un deposito o transferencia a la siguiente cuenta:
%0e %0e
DATOS DE BANCO:%0e 
Banco: Banamex%0e 
Cuenta: 1766091%0e
Sucursal: 7004%0e
Transferencia: 002261700417660918%0e

Nombre: Consorcio Comercial Rodae S. de R. L. de C. V.  %0e%0e
DATOS PARA RESERVACION: %0e 
checkIn:  2018-03-09 %0e
checkOut: 2018-03-11 %0e%0e
Quedamos a la espera de su garantia para generar su reserva.
' target='_top'>Responder</a></td> 
				<td>Asistimos a la boda de Andrea y Alexis programada para el 10 de marzo de 2018</td> 
				
                        <?php 
                        include "DataTable.php";
                        rows();
                        ?>
			   
    		</tr>   </tbody>
  </table>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <script>
  $(function(){
    $("#tabla").dataTable();
  })
  </script>
</body>

</html>