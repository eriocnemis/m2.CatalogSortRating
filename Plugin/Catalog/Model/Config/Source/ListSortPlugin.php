<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortRating\Plugin\Catalog\Model\Config\Source;

use Magento\Catalog\Model\Config\Source\ListSort as Subject;

/**
 * Catalog list sort plugin
 */
class ListSortPlugin
{
    /**
     * Retrieve option values array
     *
     * @param Subject $subject
     * @param mixed[] $options
     * @return mixed[]
     */
    public function afterToOptionArray(Subject $subject, $options)
    {
        $options[] = ['label' => __('Rating'), 'value' => 'rating'];

        return $options;
    }
}
