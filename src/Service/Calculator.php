<?php

namespace App\Service;

class Calculator {

    public function getTotalHt($products){

        $total = 0 ;

        foreach($products as $product) {
            $total += $product['product']->getPrice() * $product['quantity'];
        }

        return $total;
    }


    public function getTotalTTC($products, $tva){

        $totalTTC = 0;

        $totalTTC = $this->getTotalHt($products) * (1 + ($tva/100));

        return $totalTTC;
    }

}

?>