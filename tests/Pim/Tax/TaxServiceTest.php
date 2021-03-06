<?php

/**
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */

declare(strict_types=1);

namespace Wizaplace\SDK\Tests\Pim\Tax;

use Wizaplace\SDK\Pim\Tax\Tax;
use Wizaplace\SDK\Pim\Tax\TaxService;
use Wizaplace\SDK\Tests\ApiTestCase;

class TaxServiceTest extends ApiTestCase
{
    public function testListTaxes()
    {
        $taxes = $this->buildTaxService()->listTaxes();

        $this->assertNotEmpty($taxes);
        $this->assertContainsOnly(Tax::class, $taxes);
        $this->assertNotNull($taxes[0]->getId());
        $this->assertNotNull($taxes[0]->getName());
    }

    private function buildTaxService($userEmail = 'vendor@wizaplace.com', $userPassword = 'password'): TaxService
    {
        $apiClient = $this->buildApiClient();
        $apiClient->authenticate($userEmail, $userPassword);

        return new TaxService($apiClient);
    }

    public function testListTaxesWithNewFields()
    {
        $taxes = $this->buildTaxService()->listTaxes();
        $this->assertNotEmpty($taxes);
        $this->assertContainsOnly(Tax::class, $taxes);
        $this->assertNotNull($taxes[0]->getId());
        $this->assertNotNull($taxes[0]->getTaxId());
        $this->assertSame($taxes[0]->getId(), $taxes[0]->getTaxId());
        $this->assertNotNull($taxes[0]->getName());
        $this->assertNotNull($taxes[0]->getTax());
        $this->assertSame($taxes[0]->getName(), $taxes[0]->getTax());
        $this->assertNotNull($taxes[0]->getPriority());
        $this->assertNotNull($taxes[0]->getCode());
        $this->assertTrue($taxes[0]->isEnabled());
        $this->assertNotNull($taxes[0]->getRate());
    }
}
