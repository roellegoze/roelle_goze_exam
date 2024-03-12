<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'library_id' => $this->library->name,
            'is_reserved' => $this->is_reserved,
            'reserved_by' => $this->when(!empty($this->user), function () {
                return empty($this->user->name) ? $this->user : $this->user->name;
            }),
        ];
    }
}
