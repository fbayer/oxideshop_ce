<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Tests\Integration\Internal\Domain\Authentication\Generator;

use OxidEsales\EshopCommunity\Internal\Domain\Authentication\Generator\RandomTokenGeneratorInterface;
use OxidEsales\EshopCommunity\Tests\Integration\Internal\ContainerTrait;
use PHPUnit\Framework\TestCase;

final class RandomTokenGeneratorTest extends TestCase
{
    use ContainerTrait;

    public function testGenerateAlphanumericTokenReturnsUniqueValues(): void
    {
        $tokens = [];
        $iterations = 3;
        $tokenLength = 32;
        $tokenGenerator = $this->get(RandomTokenGeneratorInterface::class);

        for ($i = 0; $i < $iterations; $i++) {
            $tokens[] = $tokenGenerator->getAlphanumericToken($tokenLength);
        }

        $uniqueTokens = array_unique($tokens);
        $this->assertCount(count($tokens), $uniqueTokens);
    }
}
