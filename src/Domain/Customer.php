<?php
declare(strict_types = 1);

namespace TDDSmells\Domain;

class Customer
{
    /** @var int */
    private $customerId = 0;

    /** @var string */
    private $name = '';

    /** @var string */
    private $gender = self::GENDER_MALE;

    const GENDER_MALE = 'Male';
    const GENDER_FEMALE = 'Female';

    /**
     * @param int $customerId
     * @param string $name
     */
    public function __construct(int $customerId, string $name)
    {
        $this->customerId = $customerId;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }


    /**
     * @param string $value
     * @return void
     */
    public function setGender(string $value)
    {
        $this->gender = $value;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCustomerTag() :string
    {
        return $this->gender . '-' . $this->name . '-' . $this->customerId;
    }
}
