<?php
class cliente{

private $id_cliente;
private $id_usuario;
private $nombre;
private $razon_social;
private $tipo_documento;
private $numero_documento;
private $direccion;
private $ciudad;
private $fijo;
private $celular1;
private $celular2;
private $email;
private $email2;
private $email3;


public function __construct($id_cliente,$id_usuario,$razon_social,$nombre,$tipo_documento,$numero_documento,$direccion,
$ciudad,$fijo,$celular1,$celular2,$email,$email2,$email3){

	$this->id_cliente=$id_cliente;
	$this->id_usuario=$id_usuario;
	$this->nombre=$nombre;
  $this->razon_social=$razon_social;
	$this->tipo_documento=$tipo_documento;
	$this->numero_documento=$numero_documento;
	$this->direccion=$direccion;
  $this->ciudad=$ciudad;
	$this->fijo=$fijo;
	$this->celular1=$celular1;
	$this->celular2=$celular2;
	$this->email=$email;
  $this->email2=$email2;
  $this->email3=$email2;
  }

public function setId_cliente($id_cliente){$this->id_cliente = $id_cliente;}
public function getId_cliente(){return $this->id_cliente;}

public function setId_usuario($id_usuario){$this->id_usuario = $id_usuario;}
public function getId_usuario(){return $this->id_usuario;}

public function setNombre($nombre){$this->nombre = $nombre;}
public function getNombre(){return $this->nombre;}

public function setRazon_social($razon_social){$this->razon_social = $razon_social;}
public function getRazon_social(){return $this->razon_social;}

public function setTipo_documento($tipo_documento){$this->tipo_documento = $tipo_documento;}
public function getTipo_documento(){return $this->tipo_documento;}

public function setNumero_documento($numero_documento){$this->numero_documento = $numero_documento;}
public function getNumero_documento(){return $this->numero_documento;}

public function setDireccion($direccion){$this->direccion = $direccion;}
public function getDireccion(){return $this->direccion;}

public function setCiudad($ciudad){$this->ciudad = $ciudad;}
public function getCiudad(){return $this->ciudad;}

public function setCelular1($celular1){$this->celular1 = $celular1;}
public function getCelular1(){return $this->celular1;}

public function setCelular2($celular2){$this->celular2 = $celular2;}
public function getCelular2(){return $this->celular2;}


public function setEmail($email){$this->email = $email;}
public function getEmail(){return $this->email;}

public function setEmail2($email2){$this->email2 = $email3;}
public function getEmail2(){return $this->email2;}

public function setEmail3($email3){$this->email3 = $email3;}
public function getEmail3(){return $this->email3;}



public function setFijo($fijo){$this->fijo = $fijo;}
public function getFijo(){return $this->fijo;}

		}

    ?>
