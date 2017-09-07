<?php

namespace WuFan\Alidayu\Facades;

use Illuminate\Support\Facades\Facade;
use WuFan\Alidayu\SmsSender as TargetSmsSender;

class SmsSender extends Facade
{
    /**
     * 获取组件的注册名称。
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TargetSmsSender::class;
    }
}
