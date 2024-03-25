<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = app()->getLocale();
        $titleKey = 'title_' . $locale;
        $contentKey = 'content_' . $locale;

        return [
            'id' => $this->id,
            'title' => $this->$titleKey,
            'content' => $this->$contentKey,
            
        ];
    }
}
