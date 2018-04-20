<?php

/**
 *
 */
class Profesor
{

  var $id = "";
  var $nombre = "";
  var $apellidop = "";
  var $apellidom = "";
  var $departamento = "";
  var $idgrado = "";
  var $cargo = "";
  var $area = "";
  var $telefono = "";
  var $rfc = "";
  var $correo = "";
  var $gradoestudios = "";
  var $nombrecarrera = "";
  var $generacion = "";
  var $puestoactual = "";
  var $horario = "";

  function __construct()
  {
    # code...
  }

  function setId($id)
  {
    $this->id = $id;
  }

  function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  function setApellidop($apellidop)
  {
    $this->apellidop = $apellidop;
  }

  function setApellidom($apellidom)
  {
    $this->apellidom = $apellidom;
  }

  function set($id)
  {
    $this->id = $id;
  }
}
 
