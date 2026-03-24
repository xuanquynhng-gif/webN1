<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;
    protected $table = "genre";
    protected $primaryKey = "id";
    public $timestamps = false;
}
