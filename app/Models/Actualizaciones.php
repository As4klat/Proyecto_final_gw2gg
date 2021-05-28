<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualizaciones extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'url';
    }
}
