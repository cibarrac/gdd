<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
<link rel="icon" type="image/png" href="assets/img/favicon.png" />
<title> Profesor </title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />
<!-- CSS Files -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="assets/css/demo.css" rel="stylesheet" />
<!-- Fonts and Icons -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href="assets/css/themify-icons.css" rel="stylesheet">

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/paper-1.jpeg')">
<!--   Creative Tim Branding   -->

<!--   Big container  col-sm-offset-2 -->
<div class="container">
<div class="row">
<div class="col-sm-12">
<!--      Wizard container        -->
<div class="wizard-container">
<div class="card wizard-card" data-color="blue" id="wizardProfile">
<form action="" method="">
<!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

<div class="wizard-header text-center">
<h3 class="wizard-title">Crea Tu Perfil</h3>
<p class="category">Esta información nos dejará saber más sobre usted.
		</p>
</div>

<div class="wizard-navigation">
<div class="progress-with-circle">
<div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
</div>
<ul>
<li>
	<a href="#about" data-toggle="tab">
		<div class="icon-circle">
			<i class="ti-user"></i>
		</div>
		Informacion personal
	</a>
</li>
<li>
	<a href="#account" data-toggle="tab">
		<div class="icon-circle">
			<i class="ti-settings"></i>
		</div>
     Datos academicos
	</a>
</li>
<li>
<a href="#laborales" data-toggle="tab">
<div class="icon-circle">
<i class="ti-user"></i>
</div>
Datos Laborales
</a>
</li>
<li>
				<a href="#address" data-toggle="tab">
					<div class="icon-circle">
						<i class="ti-map"></i>
					</div>
					Dirección & Datos del curso
				</a>
			</li>
</ul>
	</div>

<!-- Informacion personal -->
<div class="tab-content">
<div class="tab-pane" id="about">
<div class="row">
				<h5 class="info-text"> </h5>
				<div class="col-sm-2 col-sm-offset-1">
					<div class="picture-container">
						<div class="picture">
							<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
							<input type="file" id="wizard-picture">
						</div>
						<h6>Seleccionar imagen</h6>
					</div>
				</div>
				<div class="row">

			    <div class="col-md-4">
			      <div class="form-group">
			        <label for="">Nombre(s)</label>
			        <input type="text" class="form-control" name="" value="" required>
			      </div>
			    </div>

					<div class="col-md-4">
			      <div class="form-group">
			        <label for="">Registro federal (rfc)</label>
			        <input type="text" class="form-control" name="" value="" required>
			      </div>
			    </div>

			    <div class="col-md-4">
			      <div class="form-group">
			        <label for="">Apellido paterno</label>
			        <input type="text" class="form-control" name="" value="" required>
			      </div>
			    </div>

			    <div class="col-md-4">
			      <div class="form-group">
			        <label for="">Apellido materno</label>
			        <input type="text" class="form-control" name="" value="" required>
			      </div>
			    </div>




			  </div>


			  <div class="row">



			    <div class="col-md-4 col-sm-offset-3">
			      <div class="form-group">
			        <label for="">Telefono</label>
			        <input type="text" class="form-control" name="" value="">
			      </div>
			    </div>

			    <div class="col-md-4">
			      <div class="form-group">
			        <label for="">Correo electronico</label>
			        <input type="email" class="form-control" name="" value="" required>
			      </div>
			    </div>

			  </div>


			</div>

</div>
<!-- Datos academicos-->
<div class="tab-pane" id="account">


<h5 class="info-text">   </h5>
<div class="row">
												<div class="row">

												  <div class="col-md-5 col-md-offset-2">
												    <div class="form-group">
												      <label for="">Grado de estudios</label>
												      <select class="form-control" name="">
												        <option value="">Pimaria</option>
												        <option value="">Secundaria</option>
												        <option value="">Bachillerato</option>
												      </select>
												    </div>
												  </div>

												  <div class="col-md-4 ">
												    <div class="form-group">
												      <label for="">Nombre de la carrera cursada</label>
												      <input type="text" class="form-control" name="" value="">
												    </div>
												  </div>

												  <div class="col-md-4 col-md-offset-2">
												    <div class="form-group">
												      <label for="">Años y meses</label>
												      <input type="text" class="form-control" name="" value="">
												    </div>
												  </div>

												
<div class="col-sm-8 col-sm-offset-2">
<div class="col-sm-4">
    <div class="choice" data-toggle="wizard-checkbox">
        <input type="checkbox" name="jobb" value="Design">
        <div class="card card-checkboxes card-hover-effect">
            <i class="ti-paint-roller"></i>
								<p>Ingeniero</p>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="choice" data-toggle="wizard-checkbox">
        <input type="checkbox" name="jobb" value="Code">
        <div class="card card-checkboxes card-hover-effect">
            <i class="ti-pencil-alt"></i>
								<p>Maestro en ciencias</p>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="choice" data-toggle="wizard-checkbox">
        <input type="checkbox" name="jobb" value="Develop">
        <div class="card card-checkboxes card-hover-effect">
            <i class="ti-star"></i>
								<p>Doctor</p>
        </div>
    </div>
</div>
</div>
</div>
</div>
									<div class="tab-pane" id="laborales">
<h5 class="info-text">   </h5>
<div class="row">
												<div class="row">
												  <div class="col-md-4 col-md-offset-2">
												    <div class="form-group">
												      <label for="">Unidad responsable</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>

												  <div class="col-md-4">
												    <div class="form-group">
												      <label for="">Área</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>


												  <div class="col-md-4 col-md-offset-2">
												    <div class="form-group">
												      <label for="">Puesto actual (que corresponde el talon de pago)</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>
												</div>

												<div class="row">
												  <div class="col-md-4 md-offset-2">
												    <div class="form-group">
												      <label for="">Nombre del jefe inmediato</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>



												  <div class="col-md-4">
												    <div class="form-group">
												      <label for="">Domicilio oficial</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>

												  <div class="col-md-4">
												    <div class="form-group">
												      <label for="">Telefono oficial</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>
												</div>

												<div class="row">

												  <div class="col-md-6">
												    <div class="form-group">
												      <label for="">Extension</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>

												  <div class="col-md-6">
												    <div class="form-group">
												      <label for="">Horario</label>
												      <input type="text" class="form-control" name="" value=""required>
												    </div>
												  </div>
												</div>

</div>
</div>
<!--Datos del curso -->
<div class="tab-pane" id="address">
<div class="row">
<div class="col-sm-12">
<h5 class="info-text">   </h5>
</div>
<div class="col-sm-7 col-sm-offset-1">
<div class="form-group">
    <label>Street Name</label>
    <input type="text" class="form-control" placeholder="5h Avenue">
</div>
</div>
<div class="col-sm-3">
<div class="form-group">
    <label>Street Number</label>
    <input type="text" class="form-control" placeholder="242">
</div>
</div>
<div class="col-sm-5 col-sm-offset-1">
<div class="form-group">
    <label>City</label>
    <input type="text" class="form-control" placeholder="New York...">
</div>
                      </div>
<div class="col-sm-5">
<div class="form-group">
    <label>Country</label><br>
    <select name="country" class="form-control">
        <option value="Afghanistan"> Afghanistan </option>
        <option value="Albania"> Albania </option>
        <option value="Algeria"> Algeria </option>
        <option value="American Samoa"> American Samoa </option>
        <option value="Andorra"> Andorra </option>
        <option value="Angola"> Angola </option>
        <option value="Anguilla"> Anguilla </option>
        <option value="Antarctica"> Antarctica </option>
        <option value="...">...</option>
    </select>
</div>
</div>
</div>
</div>
</div>
<div class="wizard-footer">
<div class="pull-right">
<input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Siguiente' />
<input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
</div>

<div class="pull-left">
<input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
</div>
<div class="clearfix"></div>
</div>
</form>
</div>
</div> <!-- wizard container -->
</div>
</div><!-- end row -->
</div> <!--  big container -->


</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
