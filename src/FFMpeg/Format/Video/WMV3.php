<?php

namespace FFMpeg\Format\Video;

/**
 * The WMV video format
 */
class WMV3 extends DefaultVideo
{
    public function __construct($audioCodec = 'wmav3', $videoCodec = 'wmv3')
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
        return array('wmav3');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('wmv3');
    }
}
