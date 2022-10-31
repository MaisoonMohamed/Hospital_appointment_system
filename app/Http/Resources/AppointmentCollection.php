<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AppointmentCollection extends ResourceCollection
{
   
    public function toArray($request)
    {
        return [
            'data' => AppointmentResource::collection($this->collection),
            'meta' => [
                'user count' => $this->collection->count()
            ]
        ];
    }
}
