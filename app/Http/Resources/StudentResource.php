<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'id'=>$this->id,
            'Имя'=>$this->Имя,
            'Телефон'=>$this->Телефон,
            'Адрес'=>$this->Адрес,
            'id курса'=>$this->course['id'],
            'Название курса'=>$this->course['Название'],
            'Номер курса'=>$this->course['Номер'],
            'Учитель'=>$this->course->teacher['Имя'],
        ];
    }
}
