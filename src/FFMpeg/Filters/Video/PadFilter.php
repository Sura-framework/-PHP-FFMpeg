<?php

namespace FFMpeg\Filters\Video;

use FFMpeg\Coordinate\Dimension;
use FFMpeg\Filters\AdvancedMedia\ComplexCompatibleFilter;
use FFMpeg\Format\VideoInterface;
use FFMpeg\Media\AdvancedMedia;
use FFMpeg\Media\Video;

class PadFilter implements VideoFilterInterface, ComplexCompatibleFilter
{
    /** @var Dimension */
    private $dimension;
    /** @var int */
    private $priority;

    public function __construct(Dimension $dimension, $priority = 0)
    {
        $this->dimension = $dimension;
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
     * @return Dimension
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Get name of the filter.
     *
     * @return string
     */
    public function getName()
    {
        return 'pad';
    }

    /**
     * Get minimal version of ffmpeg starting with which this filter is supported.
     *
     * @return string
     */
    public function getMinimalFFMpegVersion()
    {
        return '0.4.9';
    }

    /**
     * {@inheritdoc}
     */
    public function apply(Video $video, VideoInterface $format)
    {
        return $this->getCommands();
    }

    /**
     * {@inheritdoc}
     */
    public function applyComplex(AdvancedMedia $media)
    {
        return $this->getCommands();
    }

    /**
     * @return array
     */
    protected function getCommands()
    {
        $commands = array();

        $commands[] = '-vf';
        $commands[] = 'scale=iw*min(' . $this->dimension->getWidth() . '/iw\,' . $this->dimension->getHeight()
            . '/ih):ih*min(' . $this->dimension->getWidth() . '/iw\,' . $this->dimension->getHeight() . '/ih),pad='
            . $this->dimension->getWidth() . ':' . $this->dimension->getHeight() . ':(' . $this->dimension->getWidth()
            . '-iw)/2:(' . $this->dimension->getHeight() . '-ih)/2';

        return $commands;
    }
}
