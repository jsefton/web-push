<?php
namespace Jsefton\WebPush;

class Push
{
    // Not going to be used just yet...
    protected $version = '1.0';

    /**
     * @var string
     */
    protected $mode = 'live';

    /**
     * @var string
     */
    protected $modes = [
        'sandbox' => [
            'apiDomain' => "https://web-push.qa.parall.ax"
        ],
        'dev' => [
            'apiDomain' => 'http://web-push.dev'
        ],
        'live' => [
            'apiDomain' => 'https://web-push.exposecms.com'
        ]
    ];

    protected $apiDomain;

    protected $apiKey = "";

    /**
     * @var array
     */
    protected $endpoints = [
        'subscribe' => '/subscribe',
        'notify' => '/notify'
    ];

    public static function init($key)
    {
        $obj = new self;
        $obj->apiKey = $key;
        $obj->setMode($obj->mode);
        return $obj;
    }

    public function send($opts)
    {
        pr($opts);
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
        $this->apiDomain = $this->modes[$mode]['apiDomain'];
        return $this;
    }
}