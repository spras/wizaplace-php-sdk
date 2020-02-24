<?php

/**
 * @author      Wizacha DevTeam <dev@wizacha.com>
 * @copyright   Copyright (c) Wizacha
 * @license     Proprietary
 */

declare(strict_types=1);

namespace Wizaplace\SDK\Transaction;

use MyCLabs\Enum\Enum;

/**
 * Manage status of transaction
 *
 * @method static TransactionStatus READY()
 * @method static TransactionStatus PENDING()
 * @method static TransactionStatus SUCCESS()
 * @method static TransactionStatus FAILED()
 */
class TransactionStatus extends Enum
{
    const READY = 'READY';
    const PENDING = 'PENDING';
    const SUCCESS = 'SUCCESS';
    const FAILED = 'FAILED';
}
