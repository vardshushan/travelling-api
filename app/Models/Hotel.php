<?php

namespace App\Models;

use App\Models\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory, GetDataTrait;
    protected $fillable = [
        'country',
        'city',
        'name',
        'user_id',
    ];
}
