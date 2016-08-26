<?php


namespace Kasl\Amplitude;


class NullClient implements AmplitudeClientInterface
{

    /**
     * @param Message\Event $event
     *
     * @return mixed
     */
    public function track(Message\Event $event)
    {
        // Do not anything, I'm _null_ object
        return null;
    }
}
