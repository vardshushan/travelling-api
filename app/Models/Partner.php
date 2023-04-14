<?php

namespace App\Models;

use App\Models\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory, GetDataTrait;
    protected $fillable = [
        'name',
        'url',
        'email',
        'logo',
    ];
}
