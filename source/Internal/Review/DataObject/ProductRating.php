<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Review\DataObject;


use OxidEsales\EshopCommunity\Internal\Common\DataObject\DynamicDataObject;
use OxidEsales\EshopCommunity\Internal\Common\DataObject\DynamicDataObjectTrait;

/**
  * @internal
 */
class ProductRating
{
    /**
     * @var string
     */
    private $productId;

    /**
     * @var float
     */
    private $ratingAverage;

    /**
     * @var int
     */
    private $ratingCount;

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return float
     */
    public function getRatingAverage()
    {
        return $this->ratingAverage;
    }

    /**
     * @param float $ratingAverage
     *
     * @return $this
     */
    public function setRatingAverage($ratingAverage)
    {
        $this->ratingAverage = $ratingAverage;

        return $this;
    }

    /**
     * @return int
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * @param int $ratingCount
     *
     * @return $this
     */
    public function setRatingCount($ratingCount)
    {
        $this->ratingCount = $ratingCount;

        return $this;
    }
}
