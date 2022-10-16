<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'user' => $this->user->name,
            'body' => $this->body,
            'imagePath' => $this->imagePath,
            'category_id' => $this->category_id,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}