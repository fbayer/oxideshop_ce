<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Domain\Authentication\Generator;

final class RandomTokenGenerator implements RandomTokenGeneratorInterface
{
    private const BASE_64_NON_ALPHANUMERIC_CHARACTERS = ['+', '/', '='];

    /** @inheritDoc */
    public function getAlphanumericToken(int $length): string
    {
        $token = '';
        while (strlen($token) < $length) {
            $token .= $this->getAlphanumericString($length);
        }

        return substr($token, 0, $length);
    }

    private function getAlphanumericString(int $length): string
    {
        $base64String = base64_encode(
            random_bytes($length)
        );

        return $this->removeNonAlphanumericCharacters($base64String);
    }

    private function removeNonAlphanumericCharacters(string $base64string): string
    {
        return str_replace(
            self::BASE_64_NON_ALPHANUMERIC_CHARACTERS,
            '',
            $base64string
        );
    }
}
