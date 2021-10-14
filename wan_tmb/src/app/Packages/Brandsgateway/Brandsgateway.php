<?php

namespace App\Packages\Brandsgateway;

class Brandsgateway
{
    protected $user = 'cheyenkiffen@gmail.com';
    protected $password = 'KNFlaborant13!';

    protected $storeId = 2;

    private $devMode = false;

    protected $apiUrl;
    protected $headers;

    public function __construct()
    {
        $this->headers = [
            "headers" => [
                "content-type" => "application/json",
                "Accept" => "application/json"
            ],
            "verify" => $this->devMode // Only for local testing purpose
        ];

        if ($this->devMode == true){
            $this->apiUrl = 'https://nova.shopwoo.com/api/v1';
        }else{
            $this->apiUrl = 'https://nova.shopwoo.com/api/v1';
        }
    }

}
