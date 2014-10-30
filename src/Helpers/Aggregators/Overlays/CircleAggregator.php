<?php

/*
 * This file is part of the Ivory Google Map package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\GoogleMap\Helpers\Aggregators\Overlays;

use Ivory\GoogleMap\Helpers\Aggregators\AbstractAggregator;
use Ivory\GoogleMap\Map;

/**
 * Circle aggregator.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class CircleAggregator extends AbstractAggregator
{
    /**
     * Aggregates the circles.
     *
     * @param \Ivory\GoogleMap\Map $map     The map.
     * @param array                $circles The circles.
     *
     * @return array The aggregated circles.
     */
    public function aggregate(Map $map, array $circles = array())
    {
        return $this->aggregateValues($map->getOverlays()->getCircles(), $circles);
    }
}