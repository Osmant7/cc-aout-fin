<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ProductTest extends KernelTestCase {
    public function testEntity() {
        $product = new Product();

        $product->setName('voiture');
        $product->setPrice(10000);

        $this->assertEquals('voiture', $product->getName());
        $this->assertEquals(10000, $product->getPrice());

    }
}

?>