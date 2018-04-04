<?php

namespace App\Services;

use GuzzleHttp\Client;


/**
 * Class CurrencyService
 * @package App\Services
 */
class CurrencyService
{

    /**
     * @var Client|null
     */
    private $client = null;

    /**
     * @var string
     */
    private $url = "http://phisix-api3.appspot.com/stocks.json";

    /**
     * CurrencyService constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function getCurrencies()
    {
        $request = $this->client->get($this->url);
        $body = $request->getBody()->getContents();
        $currencies_array = json_decode($body);
        return collect($currencies_array->stock);
    }

}