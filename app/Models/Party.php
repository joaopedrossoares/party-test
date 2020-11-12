<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $table = "table_party";
    
    protected $fillable = [
        'allow_drink', 'allow_party'
    ];
}
