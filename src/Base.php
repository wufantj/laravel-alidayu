<?php

namespace WuFan\Alidayu;

class Base
{
    /**
     * @var \TopClient
     */
    protected $client;

    /**
     * 构造函数
     */
    public function __construct()
    {
        require_once 'sdk-php-2016-06-07/TopSdk.php';

        $this->client = new \TopClient;

        $this->client->appkey = config('alidayu.app_key');
        $this->client->secretKey = config('alidayu.app_secret');
        $this->client->format = 'json';
    }
}
