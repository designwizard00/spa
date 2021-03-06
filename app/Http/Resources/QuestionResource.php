<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'title'=> $this->title, 
            'slug' => $this->path,
            'body' => $this->body, 
            'user' => $this->user->name,
            'created' => $this->created_at->diffForHumans()
        ];
    }
}
