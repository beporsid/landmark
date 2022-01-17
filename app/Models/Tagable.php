<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagable extends Model
{
    use HasFactory;
    protected $fillable = [
        'tagable_id',
        'tagable_type',
        'tag_id'
    ];
}
