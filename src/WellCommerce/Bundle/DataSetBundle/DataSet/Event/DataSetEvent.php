<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\DataSetBundle\DataSet\Event;

use Symfony\Component\EventDispatcher\Event;
use WellCommerce\Bundle\DataSetBundle\DataSet\DataSetInterface;

/**
 * Class DataSetEvent
 *
 * @package WellCommerce\Bundle\DataSetBundle\DataSet\Event
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class DataSetEvent extends Event
{
    protected $dataset;

    public function __construct(DataSetInterface $dataset)
    {
        $this->dataset = $dataset;
    }

    /**
     * Returns current dataset
     *
     * @return DataSetInterface
     */
    public function getDataSet()
    {
        return $this->dataset;
    }
} 