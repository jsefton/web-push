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

    /**
     * @var string
     */
    protected $apiDomain;

    /**
     * @var string
     */
    protected $apiKey = "";

    /**
     * @var array
     */
    protected $endpoints = [
        'subscribe' => '/subscribe',
        'notify' => '/notify'
    ];

    /**
     * Init the Push API and set API Key
     * @param $key
     * @return Push
     */
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

    /**
     * Allow override to custom domain for api calls
     * @param $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->apiDomain = $domain;
        return $this;
    }

    /**
     * Switch mode which sets domain and other options
     * @param $mode
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        $this->apiDomain = $this->modes[$mode]['apiDomain'];
        return $this;
    }
}