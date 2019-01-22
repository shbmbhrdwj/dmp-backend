<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Provider extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "mobile_number" => $this->mobile_number,
            "address_line_1" => $this->address_line_1,
            "address_line_2" => $this->address_line_2,
            "state" => $this->state,
            "city" => $this->city,
            "zip_code" => $this->zip_code,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "rating" => $this->rating,
        ];
    }
}
