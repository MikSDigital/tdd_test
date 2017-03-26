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

    public function testEmailAddressCanBeSet()
    {
        $user = new App\Models\User();

        $user->setEmail('billy@mail.ru');

        $this->assertEquals($user->getEmail(), 'billy@mail.ru');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new \App\Models\User;

        $user->setFirstName('    Billy ');
        $user->setLastName('                   Clinton   ');
        $user->setEmail('billy@mail.ru');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Billy Clinton');
        $this->assertEquals($emailVariables['email'], 'billy@mail.ru');
    }
}