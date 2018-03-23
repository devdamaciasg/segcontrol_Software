<?php


class cookie{

private $id_usuario;
private $rol;
private $estado;
private $id_sesion_tipo;
private $nombre;
private $foto;
private $clave;

public function __construct($id_usuario,$rol,$estado,$id_sesion_tipo,$nombre,$foto,$clave){
	$this->id_usuario=$id_usuario;
	$this->rol=$rol;
	$this->estado=$estado;
	$this->id_sesion_tipo=$id_sesion_tipo;
	$this->nombre=$nombre;
	$this->foto=$foto;
	$this->clave=$clave;
  }

public function setId_usuario($id_usuario){$this->id_usuario = $id_usuario;}
public function getId_usuario(){return $this->id_usuario;}

public function setRol($rol){$this->rol = $rol;}
public function getRol(){return $this->rol;}

public function setEstado($estado){$this->estado = $estado;}
public function getEstado(){return $this->estado;}

public function setId_sesion_tipo($id_sesion_tipo){$this->id_sesion_tipo = $id_sesion_tipo;}
public function getId_sesion_tipo(){return $this->id_sesion_tipo;}

public function setNombre($nombre){$this->nombre = $nombre;}
public function getNombre(){return $this->nombre;}

public function setFoto($foto){$this->foto = $foto;}
public function getFoto(){return $this->foto;}

public function setClave($foto){$this->clave = $clave;}
public function getClave(){return $this->clave;}
		}

?>
