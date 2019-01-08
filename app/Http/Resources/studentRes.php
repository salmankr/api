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
           'Roll Number' => $this->roll_no,
           'Section' => $this->section,
           'teacher name' => $this->teacher== '' ? 'Teacher Not Assigned Yet' : $this->teacher,
        ];
    }
}
