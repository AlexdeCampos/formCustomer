<?php
class Customers extends model {

	public function getTotalCustomers() {
		$sql = $this->db->query("SELECT * FROM customers");
		return $sql->fetchAll();
	}	
    
    public function getCustomer($id) {
		$sql = $this->db->prepare("SELECT * FROM customers WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	
	public function add($request) {

		$sql = $this->db->prepare("INSERT INTO customers SET name = :name, email = :email, document = :document, tel = :tel");
		$sql->bindValue(":name", $request["name"]);
		$sql->bindValue(":email", $request["email"]);
		$sql->bindValue(":document", $request["document"]);
		$sql->bindValue(":tel", $request["tel"]);
		$sql->execute();
		
		return  $this->db->lastInsertId();
    }

	public function edit($request,$id){
		$sql = $this->db->prepare("SELECT id FROM customers WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {

			$sql = $this->db->prepare("UPDATE customers SET name = :name, email = :email, document = :document, tel = :tel WHERE id = :id");
			$sql->bindValue(":name", $request["name"]);
			$sql->bindValue(":email", $request["email"]);
			$sql->bindValue(":document", preg_replace('/\D/','',$request["document"]));
			$sql->bindValue(":tel", preg_replace('/\D/','',$request["tel"]));
			$sql->bindValue(":id", $id);
			$sql->execute();

			return $this->db->lastInsertId();

		} else {
			return false;
		}
	}

	public function delete($id){
		$sql = $this->db->prepare("DELETE FROM customers WHERE id = :id");
		$sql->bindValue(":id", $id);
		$sql->execute();	
	}
}
?>