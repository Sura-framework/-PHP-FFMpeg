<?php

namespace FFMpeg\Format\Video;

/**
 * The Ogg video format
 */
class Ogg extends DefaultVideo
{
    public function __construct($audioCodec = 'libvorbis', $videoCodec = 'libtheora')
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
    public function getAvailableAudioCodecs()
    {
        return array('libvorbis');
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableVideoCodecs()
    {
        return array('libtheora');
    }
}
