<?php

namespace App\Http\Resources;

use JsonSerializable;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

class BookableIndexResource extends JsonResource {

    public function toArray($request): array|JsonSerializable|Arrayable {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description
        ];
    }
}
