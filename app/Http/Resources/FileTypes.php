<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FileTypesExtension as FileTypesExtensionResource;
class FileTypes extends JsonResource
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
            'type' => $this->type,
            'file_types_extensions' => FileTypesExtensionResource::collection($this->FileTypesExtension),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
    public $preserveKeys = true;
}
