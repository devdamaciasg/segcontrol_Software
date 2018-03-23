<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/persistencia/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/segcontrol/model/cookie.php");
class sesionDAO
{


	public function validadSesion($u,$c){

		$data_source = new DataSource();

		$data_sesion_cliente = $data_source->ejecutarConsulta(" SELECT usuario.id_usuario as 'id' ,rol.nombre_rol as 'rol' ,
		usuario.estado as 'estado',cliente.id_cliente as 'tipo', cliente.nombre_contacto as 'nombre'
		FROM cliente JOIN usuario  on (cliente.id_usuario=usuario.id_usuario)JOIN rol ON(usuario.id_rol=rol.id_rol)
    where (usuario.usuario = :u and usuario.clave = :c) AND usuario.estado='ACTIVO' ",array(':u'=>$u,':c'=>$c));

		$data_sesion_empleado = $data_source->ejecutarConsulta(" SELECT usuario.id_usuario as 'id' ,rol.nombre_rol as 'rol' ,
		usuario.estado as 'estado',empleado.id_empleado as 'tipo', empleado.nombre as 'nombre',empleado.foto as 'foto',usuario.clave as 'clave'
		FROM empleado JOIN usuario  on (empleado.id_usuario=usuario.id_usuario)JOIN rol ON(usuario.id_rol=rol.id_rol)
		where (usuario.usuario = :u and usuario.clave = :c) AND usuario.estado='ACTIVO'",array(':u'=>$u,':c'=>$c));

		$sesion = array();

		if(count($data_sesion_empleado) >= 1){

			foreach ($data_sesion_empleado as $clave => $valor) {
				  $sesionController  = new cookie(
					$data_sesion_empleado[$clave]["id"],
					$data_sesion_empleado[$clave]["rol"],
					$data_sesion_empleado[$clave]["estado"],
					$data_sesion_empleado[$clave]["tipo"],
					$data_sesion_empleado[$clave]["nombre"],
					$data_sesion_empleado[$clave]["foto"],
					$data_sesion_empleado[$clave]["clave"]);
					array_push($sesion, $sesionController);
			}
			return $sesion;
		}else{

			if(count($data_sesion_cliente) >= 1){

				foreach ($data_sesion_cliente as $clave => $valor) {
					  $sesionController  = new cookie(
						$data_sesion_cliente[$clave]["id"],
						$data_sesion_cliente[$clave]["rol"],
						$data_sesion_cliente[$clave]["estado"],
						$data_sesion_cliente[$clave]["tipo"],
						$data_sesion_cliente[$clave]["nombre"]);
						array_push($sesion, $sesionController);
				}
				return $sesion;
			}else{

				return null;
			}
		}




	}//end method






}
?>
