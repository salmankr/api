<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class studentDelRes extends JsonResource
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
            "message" => $this->name."'s data has been deleted successfully!",
        ];
    }
}
