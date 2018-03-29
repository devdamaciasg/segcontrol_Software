<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/empleado.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cliente.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/usuario.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/clienteUsuario.php");

class usuariosDao
{

	public function actualizarPerfil($usuario,$rol,$estado,$id){
		$data_source = new DataSource();
		if($rol == "administrador"){$rol=1;}else{
			if($rol == "cliente"){$rol=3;}else{$rol=2;}}
		$sql ="UPDATE usuario SET 'usuario' = :usuario,
		'estado' = :estado,'id_rol' = :rol WHERE 'usuario.id_usuario' = :id";
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
			$tabla ='empleado';}else{$tabla = 'cliente';}
		$data_source = new DataSource();
		$sql ="UPDATE :tabla SET  'foto' = :foto
		WHERE :tabla = :id";
		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':id'=> $id,
			':foto' => $foto,
			':tabla'=>$tabla));
			return $resultado;
		}
	public function guardarUsuario(usuario $usuario){
		$data_source = new DataSource();
		$sql = "INSERT INTO usuario VALUES (null,:id_rol,:usuario,:clave,:estado)";
		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':id_rol'=>$usuario->getId_rol(),
			':usuario'=>$usuario->getUsuario(),
			':clave'=>$usuario->getClave(),
		 	':estado'=>$usuario->getEstado()));
      return $resultado;

			}//end method
	public function ID_ultimo_Usuario(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT * FROM `usuario` ORDER BY `usuario`.`id_usuario` DESC");
		if(count($data_table) >= 1){
			$ultimo_id=$data_table[0]['id_usuario'];
			return $ultimo_id;
		}else{return 0;}
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
  public function Nclientes(){
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





}//end class
?>
