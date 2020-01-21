<?php
class homeController extends controller {

	public function index() {
		$dados = array();

		$customers = new Customers();
		$customersList = $customers->getTotalCustomers();

		$dados['customersList'] = $customersList;
		$this->loadTemplate('home', $dados);
	}

}