<?php

require_once '/Traits/ProductsTraits.php';

class InfoOrder extends User
{

    use ProductsTraits;
    public $address;
    public $creditCard;

    public function _construct($address, $creditCard)
    {

        $this->address = $address;
        $this->creditCard = $creditCard;

    }

    public function is_cc_valid($creditCard)
    {
        $c = ["123", " 234", "456"];
        $valid = false;
        is_array($creditCard, $cc) ? $valid = true : $valid = false;
        return $valid;
    }

}
