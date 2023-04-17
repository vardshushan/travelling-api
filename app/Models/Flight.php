<?php

namespace App\Models;

use App\Models\Traits\GetDataTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory, GetDataTrait;
    protected $fillable = [
        'from',
        'to',
        'user_id',
    ];
}
