<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{

public function toArray(Request $request): array{
    return ['post_id'         => $this->id,'post_title'      => $this->title,'post_body'       => $this->body,];
}
}
