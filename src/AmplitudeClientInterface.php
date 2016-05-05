<?php
namespace Kasl\Amplitude;

/**
 * Represents an Amplitude client.
 */
interface AmplitudeClientInterface
{
    /**
     * @param Message\Event $request
     * @return Message\Response
     */
    public function track(Message\Event $event);
}
