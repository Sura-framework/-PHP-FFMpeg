<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\FFProbe;

interface OptionsTesterInterface
{
    /**
     * Tells if the given option is supported by ffprobe.
     *
     * @param string $name
     *
     * @return bool
     */
    public function has($name);
}
