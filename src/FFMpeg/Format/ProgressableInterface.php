<?php

namespace FFMpeg\Format;

use Evenement\EventEmitterInterface;
use FFMpeg\FFProbe;
use FFMpeg\Media\MediaTypeInterface;

interface ProgressableInterface extends EventEmitterInterface
{
    /**
     * Creates the progress listener.
     *
     * @param MediaTypeInterface $media
     * @param FFProbe            $ffprobe
     * @param Integer            $pass    The current pas snumber
     * @param Integer            $total   The total pass number
     * @param Integer            $duration   The new video duration
     *
     * @return array An array of listeners
     */
    public function createProgressListener(MediaTypeInterface $media, FFProbe $ffprobe, $pass, $total, $duration = 0);
}
