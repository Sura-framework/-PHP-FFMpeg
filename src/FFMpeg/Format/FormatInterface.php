<?php

namespace FFMpeg\Format;

interface FormatInterface
{
    /**
     * Returns the number of passes.
     *
     * @return string
     */
    public function getPasses();

    /**
     * Returns an array of extra parameters to add to ffmpeg commandline.
     *
     * @return array
     */
    public function getExtraParams();
}
