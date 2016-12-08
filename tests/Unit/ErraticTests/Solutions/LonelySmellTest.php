<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use TDDSmells\Domain\Customer;
use TDDSmells\Domain\Gender;

class LonelySmellSolutionTest extends TestCase
{
    protected $customer = null;

    public function setup()
    {
        $this->customer = Customer::withContactInformation(0, 'firstName', 'lastName', Gender::GENDER_MALE, 'test@email.com', '0612345678');
    }

    public function testGetCustomerFullNameShouldReturnCombinedFirstNameAndLastName()
    {
        $result = $this->customer->getFullName();

        $this->assertSame('firstName lastName', $result);
    }

    public function testConstructCustomerWithContactInformation()
    {
        $this->assertSame($this->customer->getEmail(), 'test@email.com');
        $this->assertSame($this->customer->getPhone(), '0612345678');
    }
}
