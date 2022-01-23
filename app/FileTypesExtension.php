<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileTypesExtension extends Model
{
    //
    protected $fillable = ['extension', 'file_types_id'];
    protected $table = 'file_types_extensions';

    public function fileTypes()
    {
        return $this->belongsTo('App\FileTypes');
    }
}
