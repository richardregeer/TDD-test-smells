<?php
declare(strict_types = 1);

use PHPUnit\Framework\TestCase;
use TDDSmells\Domain\Customer;

class CustomerTest extends TestCase
{
    protected static $customer = null;

    public static function setUpBeforeClass()
    {
        self::$customer = new Customer(0, 'testCustomer');
    }

    public function testGetCustomerTagShouldReturnCombinedNameWithId()
    {
        self::$customer->setGender(Customer::GENDER_FEMALE);

        $result = self::$customer->getCustomerTag();

        $this->assertSame('Female-testCustomer-0', $result);
    }

    public function testConstructDefaultCustomerShouldReturnCustomerWithMaleGender()
    {
        $this->assertSame(self::$customer->getGender(), Customer::GENDER_MALE);
    }
}
