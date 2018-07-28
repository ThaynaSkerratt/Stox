<?php
class Estocador
{
	private $conn;

	function __construct()
	{
		$this->conn = new PDO("mysql:server=localhost;dbname=db_stox", "root", "");
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}

	// ---------- Essas são funções de rotina, executadas sem interação direta do usuário ---------- 

	private function getProductBarcode($name)
	{
		$query = $this->pdo->prepare("SELECT cd_cod_barras FROM tb_produto WHERE nm_produto = :nome");
		$query->bindValue(":nome", $name);
		$query->execute();

		if($query->numRows() >= 1)
		{
			while($row = $query->fetch(PDO::FETCH_ASSOC))
			{
				return row['cd_cod_barras'];
			}
		}
		else
		{
			return false;
		}
	}

	// ---------- Fim das funções de rotina ---------- 
	//////////////////////////////////////////////////
	/////////////////////////////////////////////////
	// ---------- Essas são funções do lote ---------- 
	
	public function receiveBatch($name, $qt, $val, $supp)
	{
		$query = $this->pdo->prepare("INSERT INTO tb_lote VALUES (NULL, :cod, :qtd, :validade, :fornecedor)");
		$query->bindValue(':cod', $this->getProductBarcode());
		$query->bindValue(':qtd', $qt);
		$query->bindValue(':validade', $val);
		$query->bindValue(':fornecedor', $supp);
		$query->execute();
	}

	public function changeBatch()
	{
		$query = $this->pdo->prepare();
	}

	public function deleteBatch()
	{
		$query = $this->pdo->prepare();
	}

	public function listBatches()
	{
		$query = $this->pdo->prepare();
	}

	// ---------- Fim das funções do lote ---------- 
	//////////////////////////////////////////////////
	/////////////////////////////////////////////////
	// ---------- Essas são funções dos produtos ---------- 

	public function moveProduct()
	{
		$query = $this->pdo->prepare();
	}
	// ---------- Fim das funções sobre os produtos ---------- 
}