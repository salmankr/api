<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class studentRes extends JsonResource
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
           'name' => $this->name,
           'roll_no' => $this->roll_no,
           'Section' => $this->section,
           'teacher' => $this->teacher== '' ? 'Teacher Not Assigned Yet' : $this->teacher,
           'links' => 'None at the moment',
        ];
    }
}
