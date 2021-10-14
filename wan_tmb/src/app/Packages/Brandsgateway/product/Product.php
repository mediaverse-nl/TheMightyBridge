<?php

namespace App\Packages\Brandsgateway\product;

use App\Packages\Brandsgateway\Brandsgateway;
use GuzzleHttp\Client;

class Product extends Brandsgateway
{
    public $urlPrefix = '/products';
    private $requestUrl;

    /**
     * Catalog constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->requestUrl = $this->apiUrl . $this->urlPrefix;
    }

    public function getProducts($perPage = 100, $page = 1)
    {
        // $perPage must be an integer between 1 and 100
//        if (!is_int($perPage) || $perPage > 100 || $perPage < 1) $perPage = 1;
//        if (!is_int($page) || $page < 1) $page = 1; // $page must be an integer greater than 0


        $BrandsgatewayURL = "$this->requestUrl?per_page=$perPage&page=$page&store_id=$this->storeId";

        // Create request
        $client = new Client($this->headers);
        $res = $client->get($BrandsgatewayURL, ['auth' => [$this->user, $this->password]]);

        // Return results
        return $res->getStatusCode() === 200 ? json_decode($res->getBody())
            : $res->getStatusCode().': '.$res->getReasonPhrase();
    }
}
