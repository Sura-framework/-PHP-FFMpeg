<?php

namespace FFMpeg\Media;

use FFMpeg\FFProbe\DataMapping\Format;
use FFMpeg\FFProbe\DataMapping\StreamCollection;

abstract class AbstractStreamableMedia extends AbstractMediaType
{
    private $streams;

    /**
     * @return StreamCollection
     */
    public function getStreams()
    {
        if (null === $this->streams) {
            $this->streams = $this->ffprobe->streams($this->pathfile);
        }

        return $this->streams;
    }

    /**
     * @return Format
     */
    public function getFormat()
    {
        return $this->ffprobe->format($this->pathfile);
    }
}
