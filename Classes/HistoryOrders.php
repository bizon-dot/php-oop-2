<?php

require_once  '/Traits/ProductsTraits.php';


class HistoryUser  {

        use ProductsTraits;
        public $products;
        public $user;

        function _construct($user, $products){

            $this->user = $user;
            $this->products = $products;

        }

        

}