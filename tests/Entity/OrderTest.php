<?php

namespace App\Tests\Entity;

use App\Entity\Order;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderTest extends KernelTestCase {
    public function testEntityOrder() {
        $user = new Order();
        $userT = new User();

        $user->setNumber(2);
        $user->setTotalPrice(50);
        $user->setUser(null);
        $userT->setEmail("osmantoy035@gmail.com");

        $this->assertEquals(2, $user->getNumber());
        $this->assertEquals(50, $user->getTotalPrice());
        $this->assertEquals(null, $user->getUser());
        $this->assertEquals("osmantoy035@gmail.com", $user->getUser()->getEmail());

}
}

?>