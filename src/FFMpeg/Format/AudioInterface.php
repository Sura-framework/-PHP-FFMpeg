<?php

namespace FFMpeg\Format;

interface AudioInterface extends FormatInterface
{
    /**
     * Gets the audio kiloBitrate value.
     *
     * @return int
     */
    public function getAudioKiloBitrate();

    /**
     * Gets the audio channels value.
     *
     * @return int
     */
    public function getAudioChannels();

    /**
     * Returns the audio codec.
     *
     * @return string
     */
    public function getAudioCodec();

    /**
     * Returns the list of available audio codecs for this format.
     *
     * @return array
     */
    public function getAvailableAudioCodecs();
}
