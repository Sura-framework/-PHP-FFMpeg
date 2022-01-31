<?php

namespace FFMpeg\Format\Video;

/**
 * The WMV video format
 */
class WMV extends DefaultVideo
{
    public function __construct($audioCodec = 'wmav2', $videoCodec = 'wmv2')
    {
        $this
            ->setAudioCodec($audioCodec)
            ->setVideoCodec($videoCodec);
    }

    /**
     * {@inheritDoc}
     */
    public function supportBFrames()
    {
        return false;
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('wmav2');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('wmv2');
    }
}
