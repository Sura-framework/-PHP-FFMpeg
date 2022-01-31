<?php

namespace FFMpeg\Format\Audio;

/**
 * The WAV audio format
 */
class Wav extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'pcm_s16le';
    }

    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('pcm_s16le');
    }
}
