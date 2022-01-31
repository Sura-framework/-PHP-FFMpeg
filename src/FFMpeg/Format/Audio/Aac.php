<?php

namespace FFMpeg\Format\Audio;

/**
 * The AAC audio format
 */
class Aac extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'libfdk_aac';
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('libfdk_aac');
    }
}
