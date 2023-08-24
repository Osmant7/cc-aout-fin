<?php

namespace App\Tests\Entity;

use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderTest extends KernelTestCase {
    public function testEntityOrder() {
        $user = new Order();

        $user->setNumber(2);
        $user->setTotalPrice(50);
        $user->setUser(null);

        $this->assertEquals(2, $user->getNumber());
        $this->assertEquals(50, $user->getTotalPrice());
        $this->assertEquals(null, $user->getUser());

}
}

?>