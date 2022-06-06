<?php

class Product{
	private $id;
	private $name;
	private $qty;
	private $price;
	private $id_login;

	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}

	function getQty() {
		return $this->qty;
	}

	function getPrice() {
		return $this->price;
	}

	function getIdLogin() {
		return $this->id_login;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setName($name) {
		$this->name = $this->db->real_escape_string($name);
	}

	function setQty($qty) {
		$this->qty = $qty;
	}

	function setPrice($price) {
		$this->price = $price;
	}

	function setIdLogin($id_login) {
		$this->id_login = $id_login;
	}

	public function getAll() {
		$products = $this->db->query("SELECT * FROM product");
		return $products;
	}
		
	public function get() {
		$producto = $this->db->query("SELECT * FROM product WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}
	
	public function save() {
		$sql = "INSERT INTO product VALUES(NULL, '{$this->getName()}', {$this->getQty()}, {$this->getPrice()}, {$this->getIdLogin()})";
		$results = $this->db->query($sql);
		return $results?true:false;
	}
	
	public function edit() {
		$sql = "UPDATE product SET name='{$this->getName()}', qty={$this->getQty()}, price={$this->getPrice()}, id_login={$this->getIdLogin()} WHERE id={$this->id}";
        $results = $this->db->query($sql);
		return $results?true:false;
	}
	
	public function delete(){
		$sql = "DELETE FROM product WHERE id={$this->id}";
		$results = $this->db->query($sql);
		return $results?true:false;		
	}	
}

?>