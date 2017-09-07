<?php

namespace WuFan\Alidayu;

class SmsSender extends Base
{
    /**
     * @var \AlibabaAliqinFcSmsNumSendRequest
     */
    protected $request;

    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();

        $this->request = new \AlibabaAliqinFcSmsNumSendRequest;

        $this->request->setSmsType('normal');
    }

    /**
     * 发送短信
     *
     * @param string $signName     短信签名
     * @param string $templateCode 短信模板 ID
     * @param string $number       手机号
     * @param array  $parameters   短信模板变量
     *
     * @return array
     */
    public function send($signName, $templateCode, $number, $parameters)
    {
        $this->request->setSmsFreeSignName($signName);
        $this->request->setSmsTemplateCode($templateCode);
        $this->request->setRecNum($number);
        $this->request->setSmsParam(json_encode($parameters));

       $response = $this->client->execute($this->request);

       return json_decode(json_encode($response), true);
    }
}
