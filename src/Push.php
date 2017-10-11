<?php
namespace Jsefton\WebPush;

class Push
{
    // Not going to be used just yet...
    protected $version = '1.0';

    /**
     * @var string
     */
    protected $mode = 'sandbox';

    /**
     * @var string
     */
    protected $apiDomain = "http://web-push.dev";
    protected $sandboxApiDomain = "http://web-push.dev";

    /**
     * @var array
     */
    protected $endpoints = [
        'subscribe' => '/subscribe',
        'notify' => '/notify'
    ];

    public static function send($opts)
    {
        pr($opts);
    }
}