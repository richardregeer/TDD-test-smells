<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use TDDSmells\Domain\Customer;
use TDDSmells\Domain\Gender;

class InteractingSmellTest extends TestCase
{
    protected static $customer = null;

    public static function setUpBeforeClass()
    {
        self::$customer = Customer::withContactInformation(0, 'firstName', 'lastName', Gender::GENDER_MALE, 'test@email.com', '0612345678');
    }

    public function testGetCustomerFullNameShouldReturnCombinedFirstNameAndLastName()
    {
        $result = self::$customer->getFullName();

        $this->assertSame('firstName lastName', $result);
    }

    public function testConstructCustomerWithContactInformation()
    {
        $this->assertSame(self::$customer->getEmail(), 'test@email.com');
        $this->assertSame(self::$customer->getPhone(), '0612345678');
    }

    public function testConstructDefaultCustomerShouldReturnEmptyContactInformation()
    {
        self::$customer = new Customer(0, 'firstName', 'lastName', Gender::GENDER_MALE);

        $this->assertSame(self::$customer->getEmail(), '');
        $this->assertSame(self::$customer->getPhone(), '');
    }
}
