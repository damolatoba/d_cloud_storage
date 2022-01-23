<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilesTypesExtension extends Model
{
    //
    protected $fillable = ['extension', 'type_id'];
    protected $table = 'file_types_extensions';
}
