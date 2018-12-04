<meta charset="utf-8">
<meta charset="utf-8">
<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/bootstrap.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js" charset="utf-8"></script>
<!-- <script src="assets/js/jquery-1.11.3.min.js"></script> -->
<script src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/main.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="assets/css/buttons.dataTables.css">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js" charset="utf-8"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js" charset="utf-8"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- ideally at the bottom of the page -->
<!-- also works in the <head> -->
<script src="assets/alertify.js-0.3.11/js/alertify.min.js"></script>

<!-- include the core styles -->
<link rel="stylesheet" href="assets/alertify.js-0.3.11/css/alertify.core.css" />
<!-- include a theme, can be included into the core instead of 2 separate files -->
<link rel="stylesheet" href="assets/alertify.js-0.3.11/css/alertify.default.css" />


<script type="text/javascript">
 
    $(document).ready(function()
    {
        $("#simple_alert").click (function() 
        {
            alertify.alert("esta es mi pagina de alerta");
        });



        $("#simple_confirm").click (function() 
        {
            alertify.confirm("Este es el titulo de confirmacion", function(e) {
                if(e){alertify.alert("Has aceptado las condiciones!");}
                else{alertify.alert("No has aceptado las condiciones!");}
            });
        });

        $("#simple_prompt").click (function() 
        {
            alertify.prompt("Por favor, ingresa nuevamente tu contraseña", function(e,srt) {
                if(e){alertify.alert(srt);}
                else{alertify.alert("Error de logueo");}
            });
        });





    });

    


</script>