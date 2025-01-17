<?php

namespace App\Models;

use App\Models\type_object;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable = ['File_photo', 'Object'];

    public function object_photo()
    {
        return $this->belongsTo(type_object::class, 'Object', 'id');
    }
}
