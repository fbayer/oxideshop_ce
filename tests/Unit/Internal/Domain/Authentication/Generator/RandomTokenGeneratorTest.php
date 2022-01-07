<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Tests\Unit\Internal\Domain\Authentication\Generator;

use OxidEsales\EshopCommunity\Internal\Domain\Authentication\Generator\RandomTokenGenerator;
use OxidEsales\EshopCommunity\Tests\Integration\Internal\ContainerTrait;
use PHPUnit\Framework\TestCase;

final class RandomTokenGeneratorTest extends TestCase
{
    use ContainerTrait;

    public function testGetAlphanumericTokenReturnsStringOfExpectedLength(): void
    {
        $tokenLength = 32;

        $token = (new RandomTokenGenerator())->getAlphanumericToken($tokenLength);

        $this->assertEquals($tokenLength, strlen($token));
    }

    public function testGetAlphanumericTokenWillReturnOnlyExpectedCharacters(): void
    {
        $token = (new RandomTokenGenerator())->getAlphanumericToken(256);

        $this->assertTrue(ctype_alnum($token));
    }

    public function testGetAlphanumericTokenWithMultipleNonAlphanumericCharactersInBase64String(): void
    {
        $tokens = [];
        $tokenLength = 3;
        $tokenGenerator = new RandomTokenGenerator();

        /**
         * Trying to generate random base64 string containing more than one non-alphanumeric character ("+", "/" or "=")
         * after cleaning, such string will be shorter than $tokenLength if not padded with additional characters.
         */
        for ($i = 0; $i < 10000; $i++) {
            $tokens[] = $tokenGenerator->getAlphanumericToken($tokenLength);
        }

        $arrayOfTokenLengths = array_map('strlen', $tokens);
        $this->assertSame($tokenLength, min($arrayOfTokenLengths));
    }
}
