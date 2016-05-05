<?php

namespace Kasl\Amplitude;

use Guzzle\Http\ClientInterface;

/**
 * Default Amplitude client implementation
 */
class AmplitudeClient implements AmplitudeClientInterface
{
    /** @var string */
    const AMPLITUDE_URL = 'https://api.amplitude.com/httpapi';

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * AmplitudeClient constructor.
     *
     * @param $apiKey
     * @param ClientInterface $client
     */
    public function __construct($apiKey, ClientInterface $client)
    {
        if (empty($apiKey)) {
            throw new \InvalidArgumentException('Empty api key', 500);
        }

        $this->apiKey = $apiKey;
        $this->client = $client;
    }

    /**
     * @param Message\Event $event
     *
     * @return Message\Response
     */
    public function track(Message\Event $event)
    {
        $request = $this->client->post(null, null, $this->getPostBody($event));
        return $request->send();
    }

    /**
     * Get post body
     *
     * @param Message\Event $event
     *
     * @return array
     */
    protected function getPostBody(Message\Event $event)
    {
        return [
            'api_key' => $this->apiKey,
            'event' => $event->format(),
        ];
    }
}
