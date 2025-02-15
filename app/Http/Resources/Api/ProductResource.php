<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'category' => $this->category->name,
            'price' => $this->price,
            'stock' => $this->stock,
            'unit' => $this->unit,
            'description' => $this->description,
            'image' => $this->image,
            'slug' => $this->slug
        ];
    }
}
