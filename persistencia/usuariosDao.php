<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/usuario.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/clienteUsuario.php");

class usuariosDao
{
	public function CargarPerfil($id,$tabla){
		$data_source = new DataSource();
		$sesion = array();

		if($tabla == 'asistente' || $tabla == 'administrador'){
			$data = $data_source->ejecutarConsulta(" SELECT *
			FROM empleado JOIN usuario  on (empleado.id_usuario=usuario.id_usuario)
	                  JOIN rol ON(usuario.id_rol=rol.id_rol)
			where empleado.id_usuario = :id ",array(':id'=>$id));
			if(count($data) >= 1){
				foreach ($data as $clave => $valor) {
					  $empleadoObj  = new empleado(
						$data[$clave]["id_empleado"],
						$data[$clave]["id_usuario"],
						$data[$clave]["nombre"],
						$data[$clave]["tipo_documento"],
						$data[$clave]["numero_documento"],
						$data[$clave]["direccion"],
	          $data[$clave]["ciudad"],
	          $data[$clave]["fijo"],
	          $data[$clave]["celular1"],
	          $data[$clave]["celular2"],
	          $data[$clave]["celular3"],
	          $data[$clave]["email"],
	          $data[$clave]["foto"] );
						array_push($sesion, $empleadoObj);
				}
				return $sesion;
			}else{
				return null;
			}
		}//asistente o administrador
		else
		{
			$data = $data_source->ejecutarConsulta(" SELECT *
			FROM cliente JOIN usuario  on (cliente.id_usuario=usuario.id_usuario)
	                  JOIN rol ON(usuario.id_rol=rol.id_rol)
			where cliente.id_usuario = :id ",array(':id'=>$id));
			if(count($data) >= 1){
				foreach ($data as $clave => $valor) {
					  $clienteObj  = new cliente(
						$data[$clave]["id_cliente"],
						$data[$clave]["id_usuario"],
						$data[$clave]["nombre_contacto"],
						$data[$clave]["tipo_documento"],
						$data[$clave]["numero_documento"],
						$data[$clave]["razon_social"],
						$data[$clave]["direccion"],
	          $data[$clave]["ciudad"],
	          $data[$clave]["fijo"],
	          $data[$clave]["celular1"],
	          $data[$clave]["celular2"],
	          $data[$clave]["email1"],
						$data[$clave]["email2"],
						$data[$clave]["email3"]);
						array_push($sesion, $clienteObj);
				}
				return $sesion;
			}else{
				return null;
			}
		}//cliente
		return false;


	}//end method
public function actualizarPerfil($usuario,$rol,$estado,$id){

		$data_source = new DataSource();
		if($rol == "administrador"){
			 $rol=1;
		}else{
			if($rol == "cliente"){
				 $rol=3;
			}else{
				 $rol=2;
			}
		}
		$sql ="UPDATE usuario SET 'usuario' = :usuario,
				'estado' = :estado,
				'id_rol' = :rol
				WHERE 'usuario.id_usuario' = :id
				";
		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':usuario'=> $usuario,
			':estado' => $estado,
			':id' => $id,
			':id_rol' =>  $rol));
		return $resultado;
	}

	public function cambioClave($id,$clave){
  $data_source = new DataSource();
	$sql ="UPDATE usuario SET  'clave' = :clave
			WHERE 'id_usuario' = :id";
	$resultado = $data_source->ejecutarActualizacion($sql,array(
		':id'=> $id,
		':clave' => $clave));
	return $resultado;
}

public function cambioFoto($id,$foto,$tabla){
if($tabla == 'asistente' || $tabla == 'administrador'){
	$tabla ='empleado';
}else{
	$tabla = 'cliente';
}
$data_source = new DataSource();
$sql ="UPDATE :tabla SET  'foto' = :foto
		WHERE :tabla = :id";
$resultado = $data_source->ejecutarActualizacion($sql,array(
	':id'=> $id,
	':foto' => $foto,
  ':tabla'=>$tabla));
return $resultado;
}



public function guardarUsuario(usuario $usuario,cliente $perfil,empleado $perfil2,$tabla){

	$data_source = new DataSource();

  $sql = "INSERT INTO usuario VALUES (null,:id_rol,:usuario,:clave,:estado)";
	$resultado = $data_source->ejecutarActualizacion($sql,array(
		':id_rol'=>$usuario->getId_rol(),
		':usuario'=>$usuario->getUsuario(),
		':clave'=>$usuario->getClave(),
		':estado'=>$usuario->getEstado()));

	if(is_null($resultado) == false && intval($resultado)>0){

    if($tabla == 'administrador' || $tabla == 'asistente'){

			$sql2 = "INSERT INTO empleado VALUES (null,:id_usuario,:nombre,:tipo_documento,:numero_documento,
					:direccion,:ciudad,:fijo,:celular1,:celular2,:celular3,:email,:foto)";

					$resultado2 = $data_source->ejecutarActualizacion($sql2,array(
						':idusuario'=>$this->ID_ultimo_Usuario(),
						':nombre'=>$perfil->getNombre(),
						':tipo_documento'=>$perfil->getTipo_documento(),
						':numero_documento'=> $perfil->getNumero_documento(),
						':direccion'=>$perfil->getDireccion(),
						':ciudad'=>$perfil->getCiudad(),
						':fijo'=>$perfil->getFijo(),
						':celular1'=>$perfil->getCelular1(),
						':celular2'=>$perfil->getCelular2(),
						':celular3'=>$perfil->getCelular3(),
						':foto'=>$perfil->getFoto(),
						':email'=>$perfil->getEmail()
						)
					);
		}else{

			$sql2 = "INSERT INTO cliente VALUES (null,:id_usuario,:nombre,:razon,:tipo_documento,:numero_documento,
					:direccion,:ciudad,:fijo,:celular1,:celular2,:email1,:email2,:email3)";

		  $resultado2 = $data_source->ejecutarActualizacion($sql2,array(
								':idusuario'=>$this->ID_ultimo_Usuario(),
								':nombre'=>$perfil2->getNombre(),
								':razon'=>$perfil2->getRazon_social(),
								':tipo_documento'=>$perfil2->getTipo_documento(),
								':numero_documento'=> $perfil2->getNumero_documento(),
								':direccion'=>$perfil2->getDireccion(),
								':ciudad'=>$perfil2->getCiudad(),
								':fijo'=>$perfil2->getFijo(),
								':celular1'=>$perfil2->getCelular1(),
								':celular2'=>$perfil2->getCelular2(),
								':email'=>$perfil2->getEmail(),
								':email'=>$perfil2->getEmail2(),
								':email'=>$perfil2->getEmail3())
							);
         }

}else{
	 return null;
}

}//end method

public function ID_ultimo_Usuario(){
	$data_source = new DataSource();
	$data_table = $data_source->ejecutarConsulta("SELECT * FROM `usuario` ORDER BY `usuario`.`id_usuario` DESC");


	if(count($data_table) >= 1){
     $ultimo_id=$data_table[0]['id_usuario'];
	return $ultimo_id;
}else{
	  return 0;
  }


}
public function Nuempleados(){
	$data_source = new DataSource();

	$data_table = $data_source->ejecutarConsulta("SELECT COUNT(id_empleado) as 'n' FROM `empleado` ORDER BY id_empleado  ASC");
	if(count($data_table) >= 1){
     $n_empleados=$data_table[0]['n'];
	return $n_empleados;
}else{
	  return 0;
  }

}

public function Nuclientes(){
	$data_source = new DataSource();
	$data_table = $data_source->ejecutarConsulta("SELECT COUNT(id_cliente) as 'n' FROM cliente ORDER BY id_cliente ASC ");
	if(count($data_table) >= 1){
     $n_clientes=$data_table[0]['n'];
	return $n_clientes;
}else{
	  return 0;
  }
}

public function desactivar_Usuario($id){
	$data_source = new DataSource();
	$sql ="UPDATE usuario SET  'estado' = 'INACTIVO'
			WHERE id_usuario = :id";
	$resultado = $data_source->ejecutarActualizacion($sql,array(
		':id'=> $id));
	return $resultado;
}

public function actualizarDatos($id,empleado $obj,cliente $udc,$tabla){
	$data_source = new DataSource();

	$sql ="UPDATE usuario SET  'estado' = 'INACTIVO'
			WHERE id_usuario = :id";
	$resultado = $data_source->ejecutarActualizacion($sql,array(
		':id'=> $id));
	return $resultado;
}


 public function cargarListaCliente(){
	 $data_source = new DataSource();
	 $sesion = array();
	 $data = $data_source->ejecutarConsulta(" SELECT * FROM cliente JOIN usuario on (cliente.id_usuario=usuario.id_usuario) JOIN rol ON(usuario.id_rol=rol.id_rol) GROUP BY cliente.id_cliente");
	 if(count($data) >= 1){
		 foreach ($data as $clave => $valor) {
				 $clienteObj  = new clienteUsuario(
				 $data[$clave]["id_cliente"],
				 $data[$clave]["id_usuario"],
				 $data[$clave]["razon_social"],
				 $data[$clave]["nombre_contacto"],
				 $data[$clave]["tipo_documento"],
				 $data[$clave]["numero_documento"],
				 $data[$clave]["direccion"],
				 $data[$clave]["ciudad"],
				 $data[$clave]["fijo"],
				 $data[$clave]["celular1"],
				 $data[$clave]["celular2"],
				 $data[$clave]["email1"],
				 $data[$clave]["email2"],
				 $data[$clave]["email3"],
				 $data[$clave]["id_rol"],
				 $data[$clave]["usuario"],
				 $data[$clave]["clave"],
				 $data[$clave]["estado"]);
				 array_push($sesion, $clienteObj);
		 }
		 return $sesion;
	 }else{
		 return null;
	 }


 }


 public function cargarListaempleado(){


 }



}//end class
?>
