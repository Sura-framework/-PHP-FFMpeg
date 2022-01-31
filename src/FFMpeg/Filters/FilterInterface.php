<?php

namespace FFMpeg\Filters;

interface FilterInterface
{
    /**
     * Returns the priority of the filter.
     *
     * @return int
     */
    public function getPriority();
}
