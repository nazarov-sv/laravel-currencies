<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CurrencyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "name" => $this->name,
            "amount" => number_format($this->price->amount,2,'.',''),
            "volume" => intval($this->volume)
        ];
    }
}
