<?php
/**
 *  @author      Wizacha DevTeam <dev@wizacha.com>
 *  @copyright   Copyright (c) Wizacha
 *  @license     Proprietary
 */
declare(strict_types=1);

namespace Wizaplace\SDK\Pim\Product;

class PriceTier
{
    /** @var null|int */
    protected $lowerLimit;

    /** @var null|float */
    protected $price;

    public function __construct(array $data)
    {
        $this->lowerLimit = $data['lower_limit'];
        $this->price = $data['price'];
    }

    /** @return int */
    public function getLowerLimit(): int
    {
        return $this->lowerLimit;
    }

    /** @param int $lowerLimit */
    public function setLowerLimit(int $lowerLimit): self
    {
        $this->lowerLimit = $lowerLimit;

        return $this;
    }

    /** @return float */
    public function getPrice(): float
    {
        return $this->price;
    }

    /** @param float $price */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
