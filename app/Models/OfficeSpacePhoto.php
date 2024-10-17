<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfficeSpacePhoto extends Model
{
    protected $fillable = [
        'photo',
        'office_space_id',
    ];
}
