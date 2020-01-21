<?php
class customersController extends controller {
    
    protected $customers;

	public function __construct() {
		$this->customers = new Customers();
    }
    
	public function index() {
		$dados = array();
		$customersList = $this->customers->getTotalCustomers();

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

    public function edit($id){
        $customerData = $this->customers->getCustomer($id);
        $this->loadTemplate('customer', $customerData);
    }
    
    public function del($id){
        $this->customers->delete($id);
        header('Location: '.BASE_URL);
    }

    public function set($id = 0){
        $post = $_POST;
        $lastId = 0;
        if($id > 0){
            $lastId = $id;
            $this->customers->edit($post,$id);
        }else{
            $lastId = $this->customers->add($post);
        }

        if($lastId){
            header('Location: '.BASE_URL."index.php?url=customers/edit/$lastId");
        }  
        
    }
}