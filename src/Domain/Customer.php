<?php
declare(strict_types = 1);

namespace TDDSmells\Domain;

class Customer
{
    /** @var int */
    private $customerId;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $email;

    /** @var string */
    private $phone;

    /** @var string */
    private $gender;

    /**
     * @param int $customerId
     * @param string $firstName
     * @param string $lastName
     * @param string $gender
     */
    public function __construct(
        int $customerId,
        string $firstName,
        string $lastName,
        string $gender
    ) {
        $this->customerId = $customerId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;

        $this->phone = '';
        $this->email = '';
    }

    /**
     * @param int $customerId
     * @param string $firstName
     * @param string $lastName
     * @param string $gender
     * @param string $email
     * @param string $phone
     * @return Customer
     */
    public static function withContactInformation(
        int $customerId,
        string $firstName,
        string $lastName,
        string $gender,
        string $email,
        string $phone
    ) {
        $customer = new Customer($customerId, $firstName, $lastName, $gender);
        $customer->email = $email;
        $customer->phone = $phone;

        return $customer;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
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
    public function getFullName() :string
    {

        return "$this->firstName $this->lastName";
    }
}
