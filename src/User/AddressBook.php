<?php

/**
 * @copyright Copyright (c) Wizacha
 * @license Proprietary
 */

declare(strict_types=1);

namespace Wizaplace\SDK\User;

use Wizaplace\SDK\ArrayableInterface;

/**
 * Class AddressBook
 * @package Wizaplace\SDK\User
 */
class AddressBook implements ArrayableInterface
{
    /** @var string */
    private $id;

    /** @var null|UserTitle */
    private $title;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var string */
    private $company;

    /** @var string */
    private $phone;

    /** @var string */
    private $address;

    /** @var string */
    private $addressSecondLine;

    /** @var string */
    private $zipCode;

    /** @var string */
    private $city;

    /** @var string */
    private $country;

    /** @var string */
    private $divisionCode;

    /** @var null|string */
    private $comment;

    /** @var null|string */
    private $label;

    /**
     * UserAddress constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->label = $data['label'] ?? "";
        $this->title = empty($data['title']) ? null : new UserTitle($data['title']);
        $this->firstName = $data['firstname'];
        $this->lastName = $data['lastname'];
        $this->company = $data['company'];
        $this->phone = $data['phone'];
        $this->address = $data['address'];
        $this->addressSecondLine = $data['address_2'];
        $this->zipCode = $data['zipcode'];
        $this->city = $data['city'];
        $this->country = $data['country'];
        $this->divisionCode = $data['division_code'] ?? "";
        $this->comment = $data['comment'] ?? "";
    }

    /**
     * @return UserTitle|null
     */
    public function getTitle(): ?UserTitle
    {
        return $this->title;
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
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getAddressSecondLine(): string
    {
        return $this->addressSecondLine;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getDivisionCode(): string
    {
        return $this->divisionCode;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string|null $label
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'         => $this->getId(),
            'title'         => \is_null($this->getTitle()) ? null : $this->getTitle()->getValue(),
            'firstname'     => $this->getFirstName(),
            'lastname'      => $this->getLastName(),
            'company'       => $this->getCompany(),
            'phone'         => $this->getPhone(),
            'address'       => $this->getAddress(),
            'address_2'     => $this->getAddressSecondLine(),
            'zipcode'       => $this->getZipCode(),
            'city'          => $this->getCity(),
            'country'       => $this->getCountry(),
            'division_code' => $this->getDivisionCode(),
            'comment' => $this->getComment(),
            'label' => $this->getLabel(),
        ];
    }
}
