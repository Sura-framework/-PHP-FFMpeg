<?php

namespace FFMpeg\Filters\Waveform;

use FFMpeg\Filters\FilterInterface;
use FFMpeg\Media\Waveform;

interface WaveformFilterInterface extends FilterInterface
{
    public function apply(Waveform $waveform);
}
