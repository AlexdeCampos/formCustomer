<?php
class customersController extends controller {
    
	public function index() {
        $customers = new Customers();
		$dados = array();
		$customersList = $customers->getTotalCustomers();

		$dados['customersList'] = $customersList;
		$this->loadTemplate('home', $dados);
    }
    
    public function new(){
        $customerData = [
            "id"=>0,
            "name" =>"",
            "document" => "",
            "email" =>"",
            "tel" =>""
        ]; 

        $this->loadTemplate('customer',$customerData);
    }

    public function set($id = 0){
        $customers = new Customers();
        $post = $_POST;

        if($id > 0){
            $lastId = $id;
            $customers->edit($id,$post);
        }else{
            $lastId = $customers->add($post);
        }

        if($lastId){
            header('Location: '.BASE_URL."customers/edit/$lastId");
        }  
        
    }
    
    public function edit($id){
        $customers = new Customers();
        $customerData = $customers->getCustomer($id);

        $this->loadTemplate('customer', $customerData);
    }

    public function del($id){
        $customers = new Customers();

        $customers->delete($id);
        header('Location: '.BASE_URL);
    }

}