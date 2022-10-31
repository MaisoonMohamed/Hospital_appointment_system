<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'doctor' => $this->doctor,
            'date' => $this->date,
            'timestart' => $this->timestart,
            'timeend' => $this->timeend,
            'message' => $this->message,
            'status' => $this->status,
            'user_id' => $this-> user_id
          ];
    }
}
