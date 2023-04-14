<?php

namespace App\Models;

use App\Models\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory, GetDataTrait;
    protected $fillable = [
        'type',
        'title',
        'content',
        'image',
    ];
}
