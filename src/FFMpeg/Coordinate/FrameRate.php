<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Coordinate;

use FFMpeg\Exception\InvalidArgumentException;

class FrameRate
{
    private $value;

    public function __construct($value)
    {
        if ($value <= 0) {
            throw new InvalidArgumentException('Invalid frame rate, must be positive value.');
        }

        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
