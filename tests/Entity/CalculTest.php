<?php

namespace App\Tests\Entity;

use App\Service\Calculator;

use App\Entity\Product;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CalculTest extends KernelTestCase {

    public function testTotalHt() {
        $calcul = new Calculator();
        $product = new Product();
        $product->setName('osman');
        $product->setPrice(50);
        $product2 = new Product();
        $product2->setName('osman2');
        $product2->setPrice(10);
        

        $products = [
            [
                'product' =>$product , 'quantity' => 5
            ],
            [
                'product' =>$product2 , 'quantity' => 2
            ]
        ];

        $totalHt = $calcul->getTotalHt($products);

        $this->assertEquals(270, $totalHt);
    }

    public function testTotalTTC() {
        $calcul = new Calculator();
        $product = new Product();
        $product->setName('osmanT');
        $product->setPrice(20);
        $product2 = new Product();
        $product2->setName('osman3');
        $product2->setPrice(30);

        $products = [
             [
                'product' =>$product , 'quantity' => 2
            ],
            [
                'product' =>$product2 , 'quantity' => 1
            ]
        ];

        $tva = 20;

        $totalTTC = $calcul->getTotalTTC($products, $tva);
        $this->assertEquals(84, $totalTTC);  // 70 ajoutez la tva de 20% donc 84
    }
}

?>