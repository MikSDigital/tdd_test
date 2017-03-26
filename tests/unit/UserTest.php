<?php


class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName() {


        $this->assertTrue(true);
        $this->assertFalse(false);

        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), 'Billy');


    }

}