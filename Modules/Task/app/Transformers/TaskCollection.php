<?php

namespace Modules\Task\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => TaskResource::collection($this->collection),
            'meta' => [
                'total' => $this->collection->count(),
            ]
        ];
    }
}
