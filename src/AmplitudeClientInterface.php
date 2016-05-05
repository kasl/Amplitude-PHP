<?php

namespace Kasl\Amplitude;

/**
 * Represents an Amplitude client.
 */
interface AmplitudeClientInterface
{
    /**
     * @param Message\Event $event
     *
     * @return mixed
     */
    public function track(Message\Event $event);
}
