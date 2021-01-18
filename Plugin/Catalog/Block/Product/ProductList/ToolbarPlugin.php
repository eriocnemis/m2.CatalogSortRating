<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortRating\Plugin\Catalog\Block\Product\ProductList;

use Magento\Framework\Data\Collection;
use Magento\Catalog\Block\Product\ProductList\Toolbar as Subject;

/**
 * Catalog toolbar plugin
 */
class ToolbarPlugin
{
    /**
     * Field sort order
     */
    const FIELD = 'review_summary.rating_summary';

    /**
     * Whether sort order are added
     *
     * @var bool
     */
    protected $isOrderAdded = false;

    /**
     * Set collection to pager
     *
     * @param Subject $subject
     * @return Subject
     */
    public function afterSetCollection(Subject $subject)
    {
        if ($subject->getCurrentOrder() == 'rating') {
            $dir = strtoupper($subject->getCurrentDirection());
            $this->addSortOrder($subject->getCollection(), $dir);
        }
        return $subject;
    }

    /**
     * Add rating sort order
     *
     * @param Collection $collection
     * @param string $dir
     * @return void
     */
    private function addSortOrder(Collection $collection, $dir)
    {
        if (!$collection->isLoaded() && !$this->isOrderAdded) {
            $collection->getSelect()->order(self::FIELD . ' ' . $dir);
            $this->isOrderAdded = true;
        }
    }
}
