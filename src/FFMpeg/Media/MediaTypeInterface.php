<?php

namespace FFMpeg\Media;

interface MediaTypeInterface
{
    /**
     * Returns the available filters.
     */
    public function filters();

    /**
     * @return string
     */
    public function getPathfile();
}
