<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Api\CurrencyResource;
use App\Services\CurrencyService;
use App\Http\Controllers\Controller;

/**
 * Class CurrencyController
 * @package App\Http\Controllers\Api
 */
class CurrencyController extends Controller
{
    /**
     * @var CurrencyService|null
     */
    private $currencyService = null;

    /**
     * CurrencyController constructor.
     * @param CurrencyService $currencyService
     */
    public function __construct(CurrencyService $currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $currencies = $this->currencyService->getCurrencies();
        return CurrencyResource::collection($currencies);
    }
}
