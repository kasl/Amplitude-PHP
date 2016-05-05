Amplitude PHP
=============

How to use it
-------------

```php

$client = new Kasl\Amplitude\AmplitudeClient($apiKey, new \Guzzle\Http\Client());

$event = new Kasl\Amplitude\Message\Event();

$event->set('userId', 17)->set('eventType', '[Amplitude] Revenue');

$client->track($event);
```
