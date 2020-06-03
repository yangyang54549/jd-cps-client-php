<?php

namespace Jd\Sdk;
use GuzzleHttp\Client as HttpClient;

class Client
{
    public $appkey;

    public $secretKey;

    public $accessKoken;

    public $gatewayUrl = "https://router.jd.com/api";

    public $format = "json";

    protected $signMethod = "md5";

    protected $apiVersion = "1.0";

    /**
     * Client constructor.
     * @param string $appkey
     * @param string $secretKey
     */
    public function __construct($appkey = "", $secretKey = "")
    {
        date_default_timezone_set("Asia/Shanghai");
        $this->appkey = $appkey;
        $this->secretKey = $secretKey;
    }

    /**
     * create sign
     * @param $params
     * @return string
     */
    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->secretKey;
        foreach ($params as $k => $v) {
            if (!is_array($v) && "@" != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->secretKey;

        return strtoupper(md5($stringToBeSigned));
    }


    /**
     * @param $request
     * @return mixed
     */
    public function execute($request)
    {
        $params = [
            'method' => $request->getApiMethodName(),
            'app_key' => $this->appkey,
//            'access_token' => $this->accessKoken,
            'timestamp' => date('Y-m-d H:i:s'),
            'format' => $this->format,
            'v' => $this->apiVersion,
            'sign_method' => $this->signMethod,
            'param_json' => json_encode($request->getApiParams()),
        ];

        $params["sign"] = $this->generateSign($params);

        $client = new HttpClient(['base_uri' => $this->gatewayUrl, 'query' => $params]);

        return $client->get('')->getBody()->getContents();
    }

}