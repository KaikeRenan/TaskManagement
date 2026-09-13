<?php

namespace Modules\User\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => UserResource::collection($this->collection),
            'meta' => [
                'total' => $this->collection->count(),
            ]
        ];
    }
}
