<?php declare(strict_types=1);
/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Review\Dao;

use Doctrine\Common\Collections\ArrayCollection;
use OxidEsales\EshopCommunity\Internal\Review\DataObject\Review;

/**
 * Interface ReviewDaoInterface
 * @internal
 */
interface ReviewDaoInterface
{
    /**
     * Returns User Reviews.
     *
     * @param string $userId
     *
     * @return ArrayCollection
     */
    public function getReviewsByUserId($userId);

    /**
     * @param Review $review
     */
    public function delete(Review $review);

    /**
     * Returns the id of the Review object
     *
     * @param Review $review
     * @return string
     */
    public function save(Review $review);

}
