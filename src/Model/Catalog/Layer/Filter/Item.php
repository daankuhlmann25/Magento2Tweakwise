<?php
/**
 * Tweakwise & Emico (https://www.tweakwise.com/ & https://www.emico.nl/) - All Rights Reserved
 *
 * @copyright Copyright (c) 2017-2017 Tweakwise.com B.V. (https://www.tweakwise.com)
 * @license   Proprietary and confidential, Unauthorized copying of this file, via any medium is strictly prohibited
 */

namespace Emico\Tweakwise\Model\Catalog\Layer\Filter;

use Emico\Tweakwise\Model\Catalog\Layer\Filter;
use Emico\Tweakwise\Model\Catalog\Layer\Url;
use Emico\Tweakwise\Model\Client\Type\AttributeType;
use Magento\Catalog\Model\Layer\Filter\Item as BaseItem;

class Item
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var AttributeType
     */
    protected $attributeType;

    /**
     * @var Url
     */
    protected $url;

    /**
     * Item constructor.
     *
     * @param Filter $filter
     * @param AttributeType $attributeType
     * @param Url $url
     */
    public function __construct(Filter $filter, AttributeType $attributeType, Url $url)
    {
        $this->filter = $filter;
        $this->attributeType = $attributeType;
        $this->url = $url;
    }

    /**
     * @return Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return (string) $this->attributeType->getTitle();
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return (int) $this->attributeType->getNumberOfResults();
    }

    /**
     * @return bool
     */
    public function isSelected()
    {
        return (bool) $this->attributeType->getIsSelected();
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        if ($this->isSelected()) {
            return $this->url->getRemoveFilter($this);
        } else {
            return $this->url->getSelectFilter($this);
        }
    }

    /**
     * @return AttributeType
     */
    public function getAttribute()
    {
        return $this->attributeType;
    }
}