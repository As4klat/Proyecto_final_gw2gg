<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApyKey extends Model
{
    use HasFactory;
    protected $table = 'apiKeys';
    protected $guarded = [];
}
