<?php

namespace FFMpeg\Format\Video;

/**
 * The WebM video format
 */
class WebM extends DefaultVideo
{
    public function __construct($audioCodec = 'libvorbis', $videoCodec = 'libvpx')
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
        return true;
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraParams()
    {
        return array('-f', 'webm');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('copy', 'libvorbis');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('libvpx', 'libvpx-vp9');
    }
}
