<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Domain\Authentication\Generator;

interface RandomTokenGeneratorInterface
{
    /**
     * @param int $length
     * @return string
     */
    public function getAlphanumericToken(int $length): string;
}
