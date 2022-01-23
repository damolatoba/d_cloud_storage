<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileTypes extends Model
{

    protected $fillable = ['type'];
    protected $table = 'file_types';
}
