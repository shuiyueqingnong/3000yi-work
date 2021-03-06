<?php

class Twig_Extension_Project extends Twig_Extension
{

	public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('price', array($this, 'priceFilter')),
            new Twig_SimpleFilter('vd', array($this, 'vdFilter')),
        );
    }

    public function vdFilter($var){
    	return var_dump($var);
    }
    
    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;
        return $price;
    }

    public function getName()
    {
        return 'project';
    }


}