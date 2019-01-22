<?php

namespace App\Http\Resources;

class CategoryCollection extends BaseCollection
{

    public $collects = Category::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
