<?php
/**
 * Copyright © Eriocnemis, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Eriocnemis\CatalogSortRating\Plugin\Catalog\Model;

use Magento\Catalog\Model\Config as Subject;

/**
 * Catalog config plugin
 */
class ConfigPlugin
{
    /**
    * Retrieve attributes used for sort by as array
    *
    * @param Subject $subject
    * @param [] $options
    * @return []
    */
    public function afterGetAttributeUsedForSortByArray(Subject $subject, $options)
    {
        $options['rating'] = __('Rating');

        return $options;
    }
}
