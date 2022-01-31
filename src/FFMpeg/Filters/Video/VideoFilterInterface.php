<?php

namespace FFMpeg\Filters\Video;

use FFMpeg\Filters\FilterInterface;
use FFMpeg\Format\VideoInterface;
use FFMpeg\Media\Video;

interface VideoFilterInterface extends FilterInterface
{
    /**
     * Applies the filter on the the Video media given an format.
     *
     * @param Video          $video
     * @param VideoInterface $format
     *
     * @return array An array of arguments
     */
    public function apply(Video $video, VideoInterface $format);
}
