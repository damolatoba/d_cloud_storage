<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileTypes extends Model
{

    protected $fillable = ['type'];
    protected $table = 'file_types';

    public function fileTypesExtension()
    {
        return $this->hasMany('App\FileTypesExtension', 'file_types_id');
    }
}
