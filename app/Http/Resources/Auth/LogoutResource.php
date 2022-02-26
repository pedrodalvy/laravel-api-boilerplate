<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Resources\Json\JsonResource;

class LogoutResource extends JsonResource
{
    public function toArray($request): array
    {
        return ['message' => 'Logged out successfully'];
    }
}
