<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class JwtLoginResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'accessToken' => $this->resource['access_token'],
            'tokenType' => $this->resource['token_type'],
            'expiresIn' => $this->resource['expires_in'],
        ];
    }
}
