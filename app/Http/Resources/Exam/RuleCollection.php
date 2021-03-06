<?php

namespace App\Http\Resources\Exam;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RuleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'success'   => true,
            'message'   => 'Exam list retireved successfully!',
        ];
    }
}
