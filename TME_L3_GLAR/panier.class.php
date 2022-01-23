<?php
class panier{
	private $DB;
	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
		}
		$this->DB= $DB;
		if(isset($_GET['delPanier'])){
			$this->del($_GET['delPanier']);
		}
	}
	public function count(){
		return array_sum($_SESSION['panier']);
	}
public function total(){
	$total=0;
	$ids = array_keys($_SESSION['panier']);
	if(empty($ids)){
		$products = array();
	}
	else{
		$products = $this->DB->query('SELECT id, price FROM products WHERE id IN ('.implode(',', $ids).')');
	}
	foreach ($products as $products) {
       $total += $products->price*$_SESSION['panier'][$products->id];	
	}
	return $total;
}


    public function add($produit_id){
		if(isset($_SESSION['panier'][$produit_id])){
			$_SESSION['panier'][$produit_id]++;
		}else{
			$_SESSION['panier'][$produit_id] = 1;	
		}
    }

	public function del($produit_id){
		unset($_SESSION['panier'][$produit_id]);
	}

	
}
