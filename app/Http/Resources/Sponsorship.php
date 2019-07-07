<?php

namespace App\Http\Resources;

use App\Child;
use App\Http\Resources\Child as ChildResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Sponsorship extends JsonResource
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
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'country' => $this->country,
            'street' => $this->street,
            'city' => $this->city,
            'state_province' => $this->state_province,
            'zip_code' => $this->zip_code,
            'child' => new ChildResource(Child::findOrfail($this->child_id)),
        ];
    }
}
