<?php

namespace FFMpeg\Format\Audio;

/**
 * The Flac audio format
 */
class Flac extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'flac';
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('flac');
    }
}
