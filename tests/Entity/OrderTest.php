<?php

namespace App\Tests\Entity;

use App\Entity\Order;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OrderTest extends KernelTestCase {
    public function testEntityOrder() {
        $order = new Order();
        $user = new User();
        $user->setEmail("osmantoy035@gmail.com");

        $order->setNumber(2);
        $order->setTotalPrice(50);
        $order->setUser($user);

        $this->assertEquals(2, $order->getNumber());
        $this->assertEquals(50, $order->getTotalPrice());
        $this->assertEquals("osmantoy035@gmail.com", $order->getUser()->getEmail());

}
}

?>