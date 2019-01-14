<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class studentResCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
           'name' => $this->name,
           'Roll Number' => $this->roll_no,
           'links' => [
                'student_link' => Route('student.single', ['id' => $this->id]),
           ],
        ];
    }
}
