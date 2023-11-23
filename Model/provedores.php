<?php
class provedores
{
	private $pdo;
    
	public $idprovedores;
    public $nombrecomercial;
    public $RFC;
    public $nombreSAT;
    public $direccion;
    public $telefono;
	public $email;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM provedores");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idprovedores)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM provedores WHERE idprovedores = ?");
			          

			$stm->execute(array($idprovedores));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idprovedores)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM provedores WHERE idprovedores = ?");			          

			$stm->execute(array($idprovedores));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE provedores SET 
						nombrecomercial        = ?,
                        RFC        = ?,
						nombreSAT            = ?, 
						direccion = ?,
						telefono = ?,
						email = ?
				    WHERE idprovedores = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombrecomercial,
                        $data->RFC,
                        $data->nombreSAT,
                        $data->direccion,
						$data->telefono,
						$data->email,
                        $data->idprovedores
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `provedores` (nombrecomercial,RFC,nombreSAT,direccion,telefono,email) 
		        VALUES ( ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->nombrecomercial,
                        $data->RFC,
                        $data->nombreSAT,
                        $data->direccion,
						$data->telefono,
						$data->email                 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
