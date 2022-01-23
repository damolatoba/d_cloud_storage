<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FileTypesExtension extends JsonResource
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
            'id' => $this->id,
            'extension' => $this->extension,
            'file_types_id' => $this->file_types_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
    public $preserveKeys = true;
}
