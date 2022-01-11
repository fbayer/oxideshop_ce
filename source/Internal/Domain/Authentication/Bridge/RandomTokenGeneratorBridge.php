<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Domain\Authentication\Bridge;

use OxidEsales\EshopCommunity\Internal\Domain\Authentication\Generator\RandomTokenGeneratorInterface;

final class RandomTokenGeneratorBridge implements RandomTokenGeneratorBridgeInterface
{
    private RandomTokenGeneratorInterface $randomTokenGenerator;

    public function __construct(
        RandomTokenGeneratorInterface $randomTokenGenerator
    ) {
        $this->randomTokenGenerator = $randomTokenGenerator;
    }

    /** @inheritDoc */
    public function getAlphanumericToken(int $length): string
    {
        return $this->randomTokenGenerator->getAlphanumericToken($length);
    }
}
