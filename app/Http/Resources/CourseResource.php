<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'Название'=>$this->Название,
            'Учитель'=>$this->teacher['Имя'],
            'Студенты'=>$this->student,

        ];
    }

    public function allowed_course(){
        return[];
    }

}
