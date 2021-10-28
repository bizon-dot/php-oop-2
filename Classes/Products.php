<?php 

require_once __DIR__ . '/Traits/ProductsTraits.php';
class Products
{
	use ProductsTraits;
	public $prodName;
    public $descr;
    public $amount;
    public $price;
    public $out_of_stock;
	
	public function _construct($prodName, $descr, $amount, $price)
	{
		$this->name = $prodName;
		$this->price = $descr;
		$this->amount = $amount;
        $this->price = $price;
        $this->out_of_stock = $out_of_stock;
	}

	
}