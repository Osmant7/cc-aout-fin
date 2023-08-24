<?php

namespace App\Tests\Entity;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserTest extends KernelTestCase {
    public function testEntityUser() {
        $user = new User();

        $user->setEmail('osmantoy035@gmail.com');
        $user->setPassword('abcdefg');
        $user->setFirstname('osman');
        $user->setLastname('toy');
        $user->setRoles(['ROLES_USER']);

        $this->assertEquals('osmantoy035@gmail.com', $user->getEmail());
        $this->assertEquals('osmantoy035@gmail.com', $user->getUserIdentifier());
        $this->assertEquals('abcdefg', $user->getPassword());
        $this->assertEquals('osman', $user->getFirstname());
        $this->assertEquals('toy', $user->getLastname());
        $this->assertEquals(['ROLES_USER'], $user->getRoles());


}
}

?>