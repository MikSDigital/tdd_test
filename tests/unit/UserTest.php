<?php


class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName() {

        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), 'Billy');
    }

    public function testThatWeCanGetTheLastName() {

        $user = new \App\Models\User;

        $user->setLastName('Clinton');

        $this->assertEquals($user->getLastName(), 'Clinton');
    }

    public function testFullNameIsReturned() {

        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Clinton');

        $this->assertEquals($user->getFullName(), 'Billy Clinton');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('    Billy ');
        $user->setLastName('                   Clinton   ');

        $this->assertEquals($user->getFirstName(), 'Billy');
        $this->assertEquals($user->getLastName(), 'Clinton');

    }
}