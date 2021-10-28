<?php

trait ProductsTraits
{

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function setAmount($amount)
    {
        $this->$amount;
    }

    function getAmount($amount)
    {
       return $this->$amount;
    }

    function setOutOfStock($amount)
    {
        if ($amount < 1) {
            $this->outOfStock = $outOfStock = true;
        }
    }


    function getPrice()
    {
        return $this->price;
    }

    function setDescr($descr)
    {
        $this->descr = $descr;
    }

    function getDescr($descr)
    {
        return $this->descr;
    }
}
