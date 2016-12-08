<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use TDDSmells\Domain\Customer;
use TDDSmells\Domain\Gender;

class LonelySmellTest extends TestCase
{
    protected static $customer = null;

    public function testGetCustomerFullNameShouldReturnCombinedFirstNameAndLastName()
    {
        self::$customer = Customer::withContactInformation(0, 'firstName', 'lastName', Gender::GENDER_MALE, 'test@email.com', '0612345678');

        $result = self::$customer->getFullName();

        $this->assertSame('firstName lastName', $result);
    }

    public function testConstructCustomerOnlyWithContactInformation()
    {
        $this->assertSame(self::$customer->getEmail(), 'test@email.com');
        $this->assertSame(self::$customer->getPhone(), '0612345678');
    }
}
