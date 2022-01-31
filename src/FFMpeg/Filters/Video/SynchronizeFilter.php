<?php

namespace FFMpeg\Filters\Video;

use FFMpeg\Format\VideoInterface;
use FFMpeg\Media\Video;

/**
 * Synchronizes audio and video in case of desynchronized movies.
 */
class SynchronizeFilter implements VideoFilterInterface
{
    private $priority;

    public function __construct($priority = 12)
    {
        $this->priority = $priority;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(Video $video, VideoInterface $format)
    {
        return array('-async', '1', '-metadata:s:v:0', 'start_time=0');
    }
}
